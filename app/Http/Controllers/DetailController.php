<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Restaurant;
use App\Models\Detail;
use App\Models\Menu;
use App\Models\Transaction;
use App\Models\Order;
use Carbon\Carbon;


class DetailController extends Controller
{
    //
    public function getDetailPage($id)
    {
        $restaurants = Restaurant::find($id);
        
        $details = Detail::find($id);

        return view('detail', compact('restaurants', 'details'));
    }
    public function getMenuPage($id)
    {
        $restaurants = Restaurant::find($id);
        $details = Detail::find($id);
        $menus = Menu::where('restaurant_id', $id)->get();

        return view('menu', compact('restaurants', 'menus', 'details'));
    }
    public function getReservePage($id, Request $request)
    {
        $restaurants = Restaurant::find($id);
        $details = Detail::find($id);
        
        $menuIds =$request->input('menu_id');
        $quantities = $request-> input('quantity');
        $menuData = [];

        if($quantities){
            foreach($menuIds as $menuId){
                if(isset($quantities[$menuId]) && $quantities[$menuId]>0){
                    $menuData[]=[
                        'menu_id' => $menuId,
                        'quantity' => $quantities[$menuId]
                    ];
                }
            }
        }

        return view('reserve', compact('restaurants', 'menuData', 'details'));
    }
    public function submitReservation($id, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|min:5',
            'people' => 'required',
            'datetime' => 'required|date_format:Y-m-d\TH:i|after_or_equal:now',
        ]); 

        $restaurant = Restaurant::findOrFail($id);
        
        $datetime = Carbon::parse($request->input('datetime'));
        $timeOpen = Carbon::createFromTime($restaurant->details->time_open, 0, 0);  
        $timeClose = Carbon::createFromTime($restaurant->details->time_close, 0, 0); 

        //ubah tanggalnya sesuai sama datetime request
        $startHour = $datetime->copy()->setTime($timeOpen->hour, 0, 0);
        $endHour = $datetime->copy()->setTime($timeClose->hour, 0, 0); 
  
        if (!$datetime->between($startHour, $endHour)) {
            return redirect()->back()->withErrors(['datetime' => 'The datetime must be between opening hour.'])->withInput();
        }
        // Create a new user with the validated data
        $transaction = new Transaction();
        $transaction->name = $validatedData['name'];
        $transaction->phone = $validatedData['number'];
        $transaction->datetime = $datetime;
        $transaction->people = $validatedData['people'];
        $transaction->status = 0;
        $transaction->user_id = Auth::id();
        $transaction->restaurant_id = $id;
        if (!empty($request->input('request'))) {
            $transaction->request = $request->input('request');
        }
        else{
            $transaction->request = "";
        }
        // Save the user to the database
        $transaction->save();
        //menu order
        if (!empty($request->menu_items)) {
            foreach ($request->menu_items as $item) {
                $order = new Order();
                $order->transaction_id = $transaction->id;
                $order->menu_id = $item['menu_id'];
                $order->quantity = $item['quantity'];
                $order->save();
            }
        }
        return redirect()->route('getHomePage'); 
    }

}