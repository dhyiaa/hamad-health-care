<div class="row blue darken-1" >
    <div class="container" style="margin-top:0;  padding:50px;">
        <div class="col s12 m3 l3">
            <a  class="btn white blue-text darken-5 btn-large font  waves-effect waves-dark" style="margin:10px;" href="{{ route('about')  }}">@yield('footer-about')</a>
        </div>
        <div class="col s12 m3 l3">
            <a  class="btn white blue-text darken-5 btn-large font  waves-effect waves-dark" style="margin:10px;" href="{{ route('callus')  }}">@yield('footer-callus') </a>
        </div>
        <div class="col s12 m3 l3">
            <a  class="btn white blue-text darken-5 btn-large font  waves-effect waves-dark" style="margin:10px;" href="{{ route('med_check')  }}"> @yield('footer-med-check') </a>
        </div>
        <div class="col s12 m3 l3">
            <a  class="btn white blue-text darken-5 btn-large font  waves-effect waves-dark" rel="nofollow" style="margin:10px;" href="https://www.google.com/maps/place/Hamad+Health+Care/@48.1355958,11.5643617,131m/data=!3m1!1e3!4m18!1m12!4m11!1m3!2m2!1d11.5642182!2d48.1354716!1m6!1m2!1s0x479ddf587ddbdb97:0x7c3060856ed08419!2sHamad+Health+Care,+Sonnenstra%C3%9Fe,+80336+Munich,+Germany!2m2!1d11.5642262!2d48.1354985!3m4!1s0x479ddf587ddbdb97:0x7c3060856ed08419!8m2!3d48.1354985!4d11.5642262?hl=en-US">@yield('footer-map')</a>
        </div>
        <br><br><br>
    </div>
</div>
<div class="row grey darken-3"  style="margin-bottom:-20px; padding-bottom:20px;">
    <div class="container" style="margin-top:-20px;padding: 10px;">
        <div class="col s12 ">
            <h2 class="center-align white-text flow-text font" > @yield('footer-pag')</h2>
        </div>
    </div>
</div>