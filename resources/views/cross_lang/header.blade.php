<nav class="nav-extended blue darken-1" style="position:fixed; z-index: 11000; top:0px;"  >
  <div class="nav-wrapper " id="header_top" >
      <div class="container" style="top:0px; margin-top:0px !important;">
          <a href="{{ route('home') }}" id="header-logo" class="flow-text font" title="@yield('header-logo')">@yield('header-logo') </a>
          <ul  class="right hide-on-med-and-down "id="header-ul" >
            <li  id="icon"> <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="@yield('lang--img')"href="@yield('header-img-lang')" style="padding:0px;margin-bottom:0px;" ><img title="@yield('header-img-lang-title')" src="@yield('header-img-lang-src')" style="width:70px;height:60px;" alt=""></a></li>
            <li><a class=" font " id="header-ul-a" href="{{ route('ask_doc')  }}" title="@yield('ask_med')">@yield('ask_med')</a></li>
            <li><a class=" font " id="header-ul-a" href="{{ route('med_check')  }}" title="@yield('header-menu-medcheck')">@yield('header-menu-medcheck')</a></li>
            <li><a class=" font " id="header-ul-a" href="{{ route('partner')  }}" title="@yield('header-menu-partner')">@yield('header-menu-partner')</a></li>
            <li><a class=" font " id="header-ul-a" href="{{ route('home') }}" title="@yield('header-menu-home')">@yield('header-menu-home')</a></li>
          </ul>
          <ul id="slide-out" class="side-nav" style="color:#538192;width:300px;">
            <li class="hide-on-large-only blue darken-1" style="color:#fff;"   onClick=" $('.button-collapse').sideNav('hide');"><a class="waves-effect waves-light white-text   right-align font" href="#!"><i class="white-text material-icons prefix  " >close</i></a></li>
            <li>
            <div class="userView">
            <div class="background">
            <img src="{{ URL::to('img/1.png') }}">
            </div><br><br><br><br>
            </div>
             <li><a class="waves-effect center-align font  black-text" href="@yield('header-img-lang')" > <img title="@yield('header-img-lang-title')" src="@yield('header-img-lang-src')" style="width:70px;height:60px;" alt="@yield('header-img-lang-title')"> </a></li>
             <li><a class="waves-effect right-align font"  href="{{ route('home') }}" >@yield('header-menu-home')</a></li>
            <li><div class="divider  right-align font"></div></li>
            <li><a class="waves-effect right-align font" href="{{ route('partner')  }}">@yield('header-menu-partner')</a></li>
            <li><div class="divider  right-align font"></div></li>
              <li><a class="waves-effect right-align font" href="{{ route('ask_doc')  }}">@yield('ask_med')</a></li>
              <li><div class="divider  right-align font"></div></li>
            <li><a class="waves-effect right-align font" href="{{ route('med_check')  }}" >@yield('header-menu-medcheck')</a></li>
            <li><div class="divider right-align font"></div></li>
            <li><a class="waves-effect right-align font"  href="{{ route('callus')  }}">@yield('header-menu-callus')</a></li>
            <li><div class="divider right-align font"></div></li>
            <li><a class="waves-effect right-align font " target="_blank" href="https://www.google.com/maps/place/Hamad+Health+Care/@48.1357184,11.5636599,95a,20y,90h,41.59t/data=!3m1!1e3!4m18!1m12!4m11!1m3!2m2!1d11.5642182!2d48.1354716!1m6!1m2!1s0x479ddf587ddbdb97:0x7c3060856ed08419!2sHamad+Health+Care,+Sonnenstra%C3%9Fe,+80336+Munich,+Germany!2m2!1d11.5642262!2d48.1354985!3m4!1s0x479ddf587ddbdb97:0x7c3060856ed08419!8m2!3d48.1354985!4d11.5642262?hl=en-US">@yield('header-menu-googlemap')</a></li>
            <li><a class="waves-effect right-align font btn btn-large blue white-text "href="{{ route('admin.login')  }}">@yield('header-menu-admin')</a></li>
            <li><div class="divider right-align font"></div></li>
          </ul>
          <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
  </div>
</nav>

<div class="fixed-action-btn horizontal">
    <a   class=" blue darken-1  btn-floating btn-large  waves-effect waves-light" >
        <i class="large material-icons">menu</i>
    </a>
    <ul>
        <li><a class="btn-floating  green slide-pc" data-activates="slide-out" ><i class="material-icons">apps</i></a></li>
        <li><a id="up" onclick="" class="btn-floating red darken-1"><i class="material-icons">arrow_upward</i></a></li>
    </ul>
</div>

<script type="text/javascript">
  $('.slide-pc').sideNav();
</script>
@if(count($errors) > 0)
    <div id="modal1" class="modal" style="margin-top:100px;">
        <div class="modal-content">
            <h4 class="font red-text">error !!!</h4>
            @foreach ($errors->all() as $error)
                <p class="font red-text">{{ $error }} </p>
            @endforeach
        </div>
        <div class="modal-footer">
            <a class=" modal-action modal-close red white-text waves-effect waves-grey btn-flat">close</a>
        </div>
    </div>
@elseif (session()->has('msg') )
    <div id="modal1" class="modal" style="margin-top:100px;">
        <div class="modal-content">
            <p class="font center-align green-text">{{ session()->pull('msg') }} </p>
        </div>
        <div class="modal-footer">
            <a  class=" modal-action modal-close red white-text waves-effect waves-grey btn-flat">close</a>
        </div>
    </div>
@endif