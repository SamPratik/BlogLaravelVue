<!DOCTYPE html>
<html lang="en">
<head>
    @includeif('user.layout.partials.head')
</head>

<body>
        <!-- support bar area start -->
        @includeif('user.layout.partials.support')
        <!-- support bar area end -->

        <!-- navbar area start -->
        @includeif('user.layout.partials.nav')
        <!-- navbar area end -->

        @yield('content')

        <!-- subscribe area start -->
        @includeif('user.layout.partials.subscription')
        <!-- subscribe area end -->

        <!-- footer area start -->
        @includeif('user.layout.partials.footer')
        <!-- footer area end -->

        <div class="back-to-top"> <!-- back to top start -->
            <i class="fas fa-rocket"></i>
        </div><!-- back to top end -->

        <!-- login and register modal start-->
        @includeif('user.layout.partials.login-register')
        <!-- login and register modal end -->

        <!-- preloader area start -->
        <div class="preloader" id="preloader">
            <div class="loader loader-1">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
        <!-- preloader area end -->


        <!-- scripts start -->
        @includeif('user.layout.partials.scripts')
        <!-- scripts end -->
    </body>

    </html>
