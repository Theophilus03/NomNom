<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My Application')</title>

    <!-- for icons  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- custom css  -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" type='text/css'>
    @yield('css')
</head>
<body>
    <!-- start of header  -->
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header-logo">
                        <a href="/home">
                            <img src="{{ asset('assets/home/logo2.png') }}" width="50" height="50" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="main-navigation">
                        <nav class="header-menu">
                            <ul class="menu food-nav-menu">
                                <li><a href="/home">Home</a></li>
                                <li><a href="/restaurant">Restaurant</a></li>
                                
                                @guest
                                    <li><a class="btn2" href="/login" role="button">Log in</a></li>
                                @else
                                    <li><a href="/history">History</a></li>
                                    <li><a href="/account" class="uil uil-user"></a></li>
                                    <li>
                                        
                                        <form action="{{route('logout')}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn2">Log out</button>
                                        </form>
                                    </li>
                                @endguest
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header ends  -->

    @yield('content')

    <!-- footer starts  -->
    <footer>
        <div class="top-footer section">
            <div class="sec-wp">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-info">
                                <div class="footer-logo">
                                    <a href="/home">
                                        <img src="{{ asset('assets/home/logo.png') }}" width="100" height="100" alt="">
                                        
                                    </a>
                                </div>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="uil uil-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="uil uil-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="uil uil-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="footer-flex-box">
                                <div class="footer-menu food-nav-menu">
                                    <h3 class="h3-title">Links</h3>
                                    <ul class="column-2">
                                        <li><a href="/home" class="footer-active-menu">Home</a></li>
                                        <li><a href="/restaurant">Restaurant</a></li>
                                    </ul>
                                </div>
                                <div class="footer-menu">
                                    <h3 class="h3-title">Company</h3>
                                    <ul>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Cookie Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="js/main.js"></script>