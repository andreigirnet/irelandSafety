<div id="frontNav">
    <a href="{{route('frontHome')}}" class="logoMainLink">
        <div id="mainLogo">
            <img src="{{asset("images/logo/logomain.png")}}" alt="">
        </div>
    </a>
    <div id="navMenu">
        <a href="{{route('frontHome')}}"><div class="navItem menuColor" x-text="data.navigation[0]">Home</div></a>
        <a href="{{route('front.faq')}}"><div class="navItem menuColor" id="attentionItem" x-text="data.navigation[1]">Please Read Faq's</div></a>
{{--        <div class="navItem"><a href="{{route('front.products')}}">Online Courses</a></div>--}}
        <a href="{{route('front.team')}}"><div class="navItem menuColor" x-text="data.navigation[2]">Team Training</div></a>
        <a href="{{route('front.consulting')}}"><div class="navItem menuColor" x-text="data.navigation[3]">Consulting</div></a>
        <a href="{{route('front.blog')}}"><div class="navItem menuColor" x-text="data.navigation[5]">Blog</div></a>
        <a href="{{route('front.contact')}}"><div class="navItem menuColor" x-text="data.navigation[4]">Contact Us</div></a>

    </div>
    <div class="language-picker">
        <div x-cloak x-show="currentLanguage !== null">
            <img x-bind:src="'{{asset('images/flags/')}}' + '/' + currentLanguage + '.png'"  class="flag-icon" x-cloak="">
        </div>
        <select id="lang" x-model="currentLanguage" x-on:change="chooseLanguage(currentLanguage)">
            <option value="en">English</option>
            <option value="ro">Romanian</option>
            <option value="ru">Russian</option>
            <option value="pl">Polish</option>
            <option value="ukr">Ukranian</option>
            <option value="sp">Spanish</option>
            <!-- Add more language options as needed -->
        </select>
    </div>
    <div id="loginMenu">
        <div id="googleIcon">
            <img src="{{asset("images/logo/cpdMember.png")}}" alt="" id="cpd">
            <img src="{{asset("images/logo/rospa.png")}}" alt="" id="rospa">
            <a href=""><img src="{{asset("images/logo/google-icon.webp")}}" alt=""></a>
        </div>
        <a href="{{route('login')}}"><div class="navItem" id="attentionItem" x-text="data.login">Login</div></a>
    </div>
</div>
