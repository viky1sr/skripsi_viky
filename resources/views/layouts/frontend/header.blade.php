<header id="header" data-menu-padding="28" data-sticky-menu-padding="8">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="index.html" class="standard-logo"><img src="{{asset(config('sentence.logo'))}}" alt="{{config('sentence.title_web')}}"></a>
                    <a href="index.html" class="retina-logo"><img src="{{asset(config('sentence.logo'))}}" alt="{{config('sentence.title_web')}}"></a>
                </div><!-- #logo end -->

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu style-3 menu-spacing-margin">

                    <ul class="menu-container">
                        <li class="menu-item {{Route::is('frontend.index') ? 'current' : ''}}"><a class="menu-link" href="{{url('/')}}"><div>Home</div></a></li>
                        <li class="menu-item {{Route::is('frontend.booking.index') ? 'current' : ''}}"><a class="menu-link" href="{{route('frontend.booking.index')}}"><div>Reservasi</div></a></li>
{{--                        <li class="menu-item"><a class="menu-link" href="#"><div>List Harga</div></a></li>--}}
{{--                        <li class="menu-item"><a class="menu-link" href="#"><div>About Us</div></a></li>--}}
{{--                        <li class="menu-item"><a class="menu-link" href="#"><div>Contact</div></a></li>--}}
{{--                        @if(Auth::check())--}}
{{--                            <li class="menu-item"><a class="menu-link" href="#"><div>Log out</div></a></li>--}}
{{--                        @else--}}
{{--                            <li class="menu-item"><a class="menu-link" href="#"><div>Login</div></a></li>--}}
{{--                        @endif--}}
                    </ul>

                </nav><!-- #primary-menu end -->

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->
