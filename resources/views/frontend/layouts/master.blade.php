<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blueberry - Multi Purpose eCommerce Template.">
    <meta name="keywords" content="eCommerce, mart, apparel, catalog, fashion, Tailwind, multipurpose, online store, shop, store, template">
    <title>Ecommerce @yield('title')</title>

    <!-- Site Favicon -->
    <link rel="icon" href="{{ asset('frontend/img/favicon/favicon.png') }}" type="image/x-icon">

    <!-- Css All Plugins Files -->
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/vendor/jquery-range-ui.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- tailwindcss -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.5/dist/tailwind.min.css" rel="stylesheet">
    <script src="{{ asset('frontend/js/vendor/tailwindcss3.4.5.js') }}"></script>

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    {{-- toaster --}}
    <link rel="stylesheet" href="{{ asset('/css/toastr.min.css') }}">

</head>

<body>

    <!-- Loader -->
    <!-- <div class="bb-loader min-w-full w-full h-screen fixed top-[0] left-[0] flex items-center justify-center bg-[#fff] z-[45]">
        <img src="{{ asset('frontend/img/logo/loader.png') }}" alt="loader" class="absolute">
        <span class="loader w-[60px] h-[60px] relative"></span>
    </div> -->

    <!-- Header -->
    @include('frontend.partials.header')

    <!-- ============================================== -->
    <!-- Main Content -->
     @yield('content')
    <!-- ============================================== -->

    <!-- Footer -->
    @include('frontend.partials.footer')

    <!-- Cart sidebar -->
    @include('frontend.partials.cart_sidebar')

    <!-- Category Popup -->

    <!-- Quick view Modal -->
    @include('frontend.partials.quick_view')

    <!-- Tools side bar -->

    <!-- Back to top  -->
    <a href="#Top" class="back-to-top result-placeholder transition-all duration-[0.3s] ease-in-out w-[38px] h-[38px] hidden fixed right-[15px] bottom-[15px] z-[10] rounded-[20px] cursor-pointer bg-[#fff] text-[#6c7fd8] border-[1px] border-solid border-[#6c7fd8] text-center text-[22px] leading-[1.6]">
        <i class="ri-arrow-up-line text-[20px]"></i>
        <div class="back-to-top-wrap active-progress">
            <svg viewBox="-1 -1 102 102" class="w-[36px] h-[36px] fixed right-[16px] bottom-[16px]">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" class="fill-transparent stroke-[5px] stroke-[#6c7fd8]"></path>
            </svg>
        </div>
    </a>

    <!-- Plugins -->
    <script src="{{ asset('frontend/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/aos.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/smoothscroll.min.js') }}"></script>
    <!-- <script src="{{ asset('frontend/js/vendor/countdownTimer.js') }}"></script> -->
    <script src="{{ asset('frontend/js/vendor/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-range-ui.min.js') }}"></script>

    <!-- Toastr JS -->
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "timeOut": 5000,
            "extendedTimeOut": 1000,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "maxOpened": 3
        };

        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @elseif(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @elseif(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @elseif(Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif
    </script>

    <!-- main-js -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>