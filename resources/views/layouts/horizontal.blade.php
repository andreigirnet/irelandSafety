<!DOCTYPE html>
<html lang="en" data-layout="topnav" data-menu-color="{{ $menuColor ?? 'light' }}" data-topbar-color="{{ $topbarColor ?? 'light' }}">

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


</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        @include('layouts.shared/topbar')
        @include('layouts.shared/horizontal-nav')

        <div class="content-page">
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

    @yield('modal')

    @include('layouts.shared/right-sidebar')

    @include('layouts.shared/footer-scripts')

    @vite(['resources/js/layout.js', 'resources/js/main.js'])



</body>

</html>
