<div  id="logo" class="parallax-container  home_logo pc-logo" style=" background-image:url( {{  URL::to('img/') }}/@yield('logo-img') );background-attachment:fixed; background-size:cover;height:auto;background-repeat:no-repeat; ">
    <br>
    <div class="container" >
        <h1 class="hide-on-med-and-down flow-text center-align top-signale-vidoe white-text font" title="@yield('logo-title')" style="font-size:33pt;margin-bottom:30px; margin-top:-70px;">@yield('logo-title')</h1>
        <h1  style="font-size:30pt;margin-bottom: 20px;margin-top: -50px; line-height: 1.7" class="hide-on-large-only flow-text center-align top-signale-vidoe white-text font flow-text tt-headline"  title="@yield('logo-title')" >@yield('logo-title')</h1>
        <p>
        </p>
        <div class="divider  blue lighten-2 "></div>
        <div class="container" style="margin-top:20px;">
            <div class="row font" >
                <h5   style="font-size:15pt;text-align:center;line-height:2;" class="white-text flow-text">
                    @yield('logo-con')
                </h5>
            </div>
        </div>
        <br>@yield('logo-links')
        <div class="container center center-align white-text flow-text" style="margin-top:10px; ">
            <i  style="font-size:40pt;cursor:pointer;" id="down" onclick="down()"  class="material-icons ">keyboard_arrow_down</i>
        </div>
    </div>
</div>
