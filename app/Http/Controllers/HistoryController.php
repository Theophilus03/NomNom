<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Transaction;

use Illuminate\Support\Facades\Log;

class HistoryController extends Controller
{
    public function getHistoryPage()
    {
        $userId = Auth::id();
        $transactions = Transaction::where('user_id', $userId)->orderBy('datetime', 'desc')->get();
        foreach ($transactions as $transaction) {
            if ($transaction->datetime < Carbon::now() && $transaction->status == 0) {
                $transaction->status = 1;
                $transaction->save();
            }
        }
        $transactions = Transaction::where('user_id', $userId)->orderBy('datetime', 'desc')->get();

        return view('history', compact('transactions'));
    }
    public function getHistoryDetailPage($id)
    {
        $userId = Auth::id();
        $transaction = Transaction::where('user_id', $userId)
                                ->where('id', $id)
                                ->first();

        return view('history_detail', compact('transaction'));
    }
    public function CancelReservation($id)
    {
        $transaction = Transaction::where('id', $id)->first();
        $transaction->delete();

        return redirect()->route('getHistoryPage');
    }
}
