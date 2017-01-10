@extends('al.layout.layout')
@section('key-word')
    شركة حمد للرعاية , حمد ,رعاية ,المانيا ,علاج , المانيا ,  علاء حمد , مستشفى المانيا , ترجمة الماني , ترجمة
@endsection
@section('desc')
    يمكنكم الان ان تعرفوا ارقام الاتصال الخاصة بشركة حمد من هنا
@endsection
@section('title')
    اتصل بنا | حمد للرعاية
@endsection
@section('logo-title')
    اتصل علينا الان لكي نساعدك
@endsection
@section('logo-img')
service2.jpg
@endsection
@section('logo-con')
    هدفنا تقديم كافة خدمات الرعاية الطبية بمواصفات الدرجة الاولى و التي تكفل حصول مرضانا على العلاج اللازم في المستشفيات و العيادات الالمانية
@endsection
@section('logo-links')
    <div class="row font">
        <div class="col s12 center ">
            <a href="{{ route('about')  }}" title=" من نحن"
               class="waves-effect circle waves-light btn-large white orange-text darken-2 " style="margin-left: 5px;">
                <i class="fa fa-question" aria-hidden="true"></i>
                <span></span>&nbsp;&nbsp;&nbsp;&nbsp; من نحن
            </a>
        </div>
        <br><br>
        <br><br>
        <br>
    </div>
@endsection
@section('content-con')
    <div class="row white z-depth-5  grey lighten-5 " style="margin-top:0px !important;margin-bottom:0px;">
        <div class="row white-text hoverable font" style="margin-bottom: 0px;">
            <div class="col s12 m12 serv"
                 style="background-image: url({{ URL::to('img/logo_call.jpg')  }});background-size: cover; background-repeat: no-repeat;height:auto;">
                <div class="container">
                    <h3 class="left-align  orange-text flow-text" style="font-size: 22pt"> الايميل الخاص بنا </h3>
                    <div class="divider"></div>
                    <p class="left-align flow-text" style="font-size: 15pt">hamad_ala@yahoo.de </p>
                    <p class="left-align flow-text" style="font-size: 15pt">hamad_ala@yahoo.de </p>
                    <br>
                    <br>
                    <h3 class="left-align orange-text flow-text" style="font-size: 22pt"> ارقام الهاتف</h3>
                    <div class="divider"></div>
                    <p class="left-align flow-text" style="font-size: 15pt"><span>00491719640942</span>&nbsp;&nbsp; : &nbsp;&nbsp; واتس اب  </p>
                    <p class="left-align flow-text" style="font-size: 15pt"><span>00491737833333</span>&nbsp;&nbsp; : &nbsp;&nbsp; جوال  </p>
                    <p class="left-align flow-text" style="font-size: 15pt"><span>0049891499039110</span>&nbsp;&nbsp; : &nbsp;&nbsp; هاتف   </p>
                    <p class="left-align flow-text" style="font-size: 15pt"><span>00491499039115</span>&nbsp;&nbsp; : &nbsp;&nbsp; فاكس   </p>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <div class="row white z-depth-5  grey lighten-4 " style="margin-top:0px !important;margin-bottom:0px;">
        <div class="row white-text hoverable font" style="margin-bottom: 0px;">
            <div class="col s12 m12 serv"
                 style=" background-image: url({{ URL::to('img/map.jpg')  }});background-size: cover; background-repeat: no-repeat;height:650px !important;opacity: 1 !important; filter:blur(0px) !important;">
                <div class="container">
                    <h3 class="left-align orange-text flow-text" style="font-size: 22pt">موقعنا على خرائط كوكل</h3>
                    <div class="divider"></div>
                    <iframe width="100%" class="map" style="margin-top:30px"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d182.89546079238485!2d11.5643946!3d48.1355039!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479ddf587ddbdb97%3A0x7c3060856ed08419!2sHamad+Health+Care!5e1!3m2!1sar!2sjo!4v1475395411482"
                            frameborder="0"></iframe>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
