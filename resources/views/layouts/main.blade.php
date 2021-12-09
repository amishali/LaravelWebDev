<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            @include('includes.top')
        </div>
        <!-- Top bar End -->

        <!-- Nav Bar Start -->
        <div class="nav">
             @include('includes.nav')
        </div>
        <!-- Nav Bar End -->

        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            @include('includes.bottombar')
        </div>
        <!-- Bottom Bar End -->

        <!-- Main Slider Start -->
        <div class="header">
            @include('includes.header')
        </div>
        <!-- Main Slider End -->



        <!-- Featured Product Start -->
        <div class="featured-product product">
                @yield('content')
        </div>
        <!-- Featured Product End -->

        <!-- Footer Start -->
        <div class="footer">
                @include('includes.footer')
        </div>
        <!-- Footer End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
             @include('includes.bottom-footer')
        </div>
        <!-- Footer Bottom End -->

          @include('includes.scripts')
    </body>
</html>

