<!DOCTYPE html>
<html lang="en" data-sidenav-size="{{ $sidenav ?? 'default' }}" data-layout-mode="{{ $layoutMode ?? 'fluid' }}" data-layout-position="{{ $position ?? 'fixed' }}" data-menu-color="{{ $menuColor ?? 'dark' }}" data-topbar-color="{{ $topbarColor ?? 'light' }}">

<head>
    @include('layouts.shared/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.shared/head-css', ['mode' => $mode ?? '', 'demo' => $demo ?? ''])
    <link rel="stylesheet" href="{{asset("css/admin/navigationMain.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/adminMain.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/adminProfile.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/homePageAdmin.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/landing.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/consulting.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/employeeRegister.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/dashboard.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/basket.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/orders.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/course.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/checkout.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/package.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/share.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/adminProduct.css")}}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/f5urckdwcwce4xjd072v2er6y33x3c23yw42dsugdzmgti41/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <style>
        [x-cloak] { display: none; }
    </style>




</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        @include('layouts.shared/topbar')
        @include('layouts.shared/left-sidebar')
        <a href="/cart">
            <div class="mobileCartContainer">
                <div class="mobileCartCounter">
                    @if(Cart::getDetails()->items_count)
                        <div class="mobileCartItemCounter">{{Cart::getDetails()->items_count}}</div>
                    @endif
                </div>
                <img src="{{asset('images/icons/cartSingle.png')}}" alt="">
            </div>
        </a>

        <div class="content-page">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-danger">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container -->

            </div>
            <!-- content -->

            @include('layouts.shared/footer')
        </div>

    </div>
    <!-- END wrapper -->
    <script>
        window.replainSettings = { id: '026d1438-5b42-4350-b663-dcd99f150913' };
        (function(u){var s=document.createElement('script');s.async=true;s.src=u;
            var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
        })('https://widget.replain.cc/dist/client.js');
    </script>


    @yield('modal')

    @include('layouts.shared/right-sidebar')

    @include('layouts.shared/footer-scripts')

    @vite(['resources/js/layout.js', 'resources/js/main.js'])
    <script src="{{asset('js/hideAdminNav.js')}}"></script>



</body>

</html>
