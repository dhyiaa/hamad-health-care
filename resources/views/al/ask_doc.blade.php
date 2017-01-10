@extends('al.layout.layout')

@section('key-word')
    شركة حمد للرعاية , حمد ,رعاية ,المانيا ,علاج , المانيا ,  علاء حمد , مستشفى المانيا , ترجمة الماني , ترجمة
@endsection
@section('desc')
    يمكنك الان الاتصال بنا  وشرح حالتكم المرضية لنا وسوف نسال افضل الاطياء في المانيا ونوافيكم بالجوانب مجاناً !!!
@endsection
@section('title')
    استشارة طبية مجانية | حمد للرعاية
@endsection
@section('logo-title')
    استشارة طبية مجانية
@endsection
@section('logo-img')
service.jpg
@endsection
@section('logo-con')
    الان سمكنك ان تستفسروا عن حالتكم المرضية وسوف نجيب علكم باجابات افضل الاطباء الالمان كل ذلك مع التكلفة مجاناً  انضر الى الاسفل !!
@endsection
@section('logo-links')
    <div class="row font" >
        <div class="col s12 center ">
            <a href="{{ route('callus')  }}" title=" اتصل بنا" class="waves-effect circle waves-light btn-large white-text orange darken-2   " target="_self" style="margin-left: 5px;">
                <i class="material-icons">call</i>
                <span></span>&nbsp;&nbsp;&nbsp;&nbsp; اتصل بنا
            </a>
        </div>
        <br><br>
        <br><br>
        <br>
    </div>
@endsection
@section('content-con')
    <div class="row white z-depth-5  grey lighten-4 " style="margin-top:0px !important;margin-bottom:0px;">
        <div class="row white-text hoverable font" style="margin-bottom: 0px;">
            <div class="col s12 m12 serv" style="t:500px !important; height: auto; position: relative;">
                <div class="container"  >
                    <h3 class="left-align  blue-text flow-text" style="font-size: 22pt"> استشارة طبية مجانية</h3>
                    <div class="divider"></div>
                    <p  class="left-align flow-text grey-text" style="font-size: 15pt" >يمكنكم الان وبكل بساطة  ومجاناً ان تستفسروا عن المشاكل الصحية التي تعانون وسوف نسال بها افضل اطباء المتخصصين في المانيا ثم نوافيكم بالتفاصيل مجاناً </p>
                    <form action="{{ route('ask_doc') }}" method="post">
                        <div class="row">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col s12">
                                <div class="row">
                                    <div class="input-field col s12 m6">
                                        <input  name="first_name" id="first_name" type="text" class=" black-text ">
                                        <label for="first_name" class=" left-align waves-input-wrapper">الاسم الاول </label>
                                    </div>
                                    <div class="input-field col s12 m6">
                                        <input  name="last_name" id="last_name" type="text" class=" black-text ">
                                        <label for="last_name" class=" left-align" >الاسم  الاخير  </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="email" name="email" type="email" class=" black-text align-right validate">
                                        <label for="email" class=" left-align"> الايميل </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea id="textarea1"  name="ask" class=" black-text align-right materialize-textarea"></textarea>
                                                <label style="position: absolute; left: 0px;float: right;text-align: right;" for="textarea1">وصف موجز ودقيق عن الحالة المرضية</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 center-align center">
                                        <div class="row">
                                            <div class="switch " >
                                                <label class="blue-text" >
                                                    <span>ذكر</span>
                                                    <input type="checkbox" name="sex">
                                                    <span class="lever"></span>
                                                    <span>انثى</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m12 right  ">
                                        <div class="row center-align center">
                                            <input class="btn waves-effect waves-light btn-css btn-large blue white-text " type="submit" value="ارسال">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <div class="row serv " style="background-color:#000;min-height:420px;margin-top:0px;background-repeat:no-repeat; background-size:cover;background-image:url({{ URL::to('img/logo_call.jpg') }});padding: 30px 0;margin-bottom:0px; " >
        <div class="container " >
            <form  action="{{ route('email') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col s12 " >
                    <h3 class="orange-text flow-txet left-align  font"  style="font-size: 22pt">اشترك بالقائمة البريدية لتصلك كل جديد </h3>
                </div>
                <div class="col s12 " style="margin-bottom:20px;"><div class="divider"></div></div>
                <div class="col s12 m12 l9" >
                    <div class="input-field right-text left-align">
                        <input   placeholder="ادخل الايميل"  type="email" name="email" class="orange-text center-align flow-text font browser-default" style="font-size:15pt;padding:5px;background-color: #fff;"  >
                    </div>
                </div>
                <div class="col s12 m12 l3  ">
                    <div class="input-field col s12  center ">
                        <input class="btn btn-large orange darken-2  font "  type="submit" value="اشترك" style="margin-bottom:40px" />
                    </div>
            </form>
        </div>
    </div>
    </div>

    @endsection