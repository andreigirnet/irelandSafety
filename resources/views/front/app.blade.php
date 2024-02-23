<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Title --}}
    <title>Ireland Safety Training - Online Safety Courses with Certificates</title>
    {{-- Meta description --}}
    <meta name="description" content="Discover Our Fully Online Safety Courses and Training ⭐️ Average Duration: 1 Hour ⭐️ Digital Certificate Provided ⭐️ Unlimited Exam Attempts ⭐️ Recognized in Ireland, UK, and Across Europe">
    <meta name="keywords" content="Manual Handling Courses Online, Best Manual Handling Training Ireland, Manual Handling Certification & Courses, Manual Handling Instructor Certification, Expert Manual Handling Assessment, Compliance with Manual Handling Regulations, Safety in Manual Handling Techniques, Ergonomic Lifting Practices, Efficient Load Handling Methods, Preventing Manual Handling Injuries, Top-Rated Manual Handling Practices in Ireland, Manual Handling Guidelines and Certification, Advanced Manual Handling Training Solutions, Certified Manual Handling Programs, Affordable Manual Handling Certification in Ireland, Professional Manual Handling Courses">
    {{-- Fonts --}}
    <meta property="og:image" content="https://www.irish-manualhandling.com/images/metaImage.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow" rel="stylesheet">
    {{-- Css --}}
    <link rel = "icon" href ="{{asset('images/logo/flavicons.ico')}}" type = "image/x-icon">
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/registerInclude.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/footer.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/brandSwiper.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/landing.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/products.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/product.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/teamTraining.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/faq.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/contact.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/consulting.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/login.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/blog.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/adminProduct.css")}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<meta name="google-site-verification" content="LzejX2Dd-6oj32ZQRq5981tz74cTlalGjMXEwe6ZeiI" />


</head>
<body x-data="app()">

@include("frontIncludes/hamburger")
@include("frontIncludes/responsiveNav")
@include("frontIncludes/frontNav")
@include("frontIncludes/subNav")
@include("frontIncludes/subNavMobile")

@yield('content')



<script>
window.replainSettings = { id: '9f43da79-85c0-4dd0-9467-72fe6bdf1bff' };
(function(u){var s=document.createElement('script');s.async=true;s.src=u;
var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
})('https://widget.replain.cc/dist/client.js');
</script>
@include("frontIncludes/registerInclude")
@include("frontIncludes/footer")
@include("frontIncludes/brandSwiper")
<script src="{{asset("js/hamburgerAction.js")}}"></script>
<script src="{{asset("js/brandSwiper.js")}}"></script>
<script src="{{asset("js/accordion.js")}}"></script>
<script src="{{asset("js/review.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{asset("js/swiper.js")}}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="{{asset('js/mainScript.js')}}"></script>
<script>
    AOS.init();
</script>
</body>
</html>
