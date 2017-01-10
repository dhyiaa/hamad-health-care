@extends('ar.layout.layout')
@section('key-word')
    شركة حمد للرعاية , حمد ,رعاية ,المانيا ,علاج , المانيا ,  علاء حمد , مستشفى المانيا , ترجمة الماني , ترجمة
@endsection
@section('desc')
في هذة الصفحة سوف تجون  الاجابة عن كل اسالتكم المتعلقة بشركة حمد للرعاية الصحية
@endsection
@section('title')
    من نحن | حمد للرعاية
@endsection
@section('logo-title')
    معلومات عن شركة حمد للرعاية الصحية
@endsection
@section('logo-img')
about.jpg
@endsection
@section('logo-con')
    هدفنا تقديم كافة خدمات الرعاية الطبية بمواصفات الدرجة الاولى و التي تكفل حصول مرضانا على العلاج اللازم في المستشفيات و العيادات الالمانية
@endsection
@section('logo-links')
    <div class="row font" >
        <div class="col s12 center ">
            <a href="{{ route('callus')  }}" title="اتصل بنا" class="waves-effect circle waves-light btn-large white orange-text darken-2  " style="margin-left: 5px;">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span></span>&nbsp;&nbsp;&nbsp;&nbsp; اتصل بنا
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
            <div class="col s12 m12 serv" style="background-image: url({{ URL::to('img/trans.jpg')  }});background-size: cover; background-repeat: no-repeat;">
                <div class="container"  >
                    <h3 class="right-align  orange-text flow-text" style="font-size: 22pt"> حمد هيلث كير</h3>
                    <div class="divider"></div>
                    <p  class="right-align flow-text" style="font-size: 15pt" > شركة المانية تتمتع بالشخصية الإعتبارية و مسجلة في غرفة التجارة و الصناعة الألماني تأسست من قبل السيد علاء حمد في عام ١٩٩٧ متخصصة في مجال خدمات الرعاية الطبية للمرضى العرب الراغبين في تلقي العلاج في المانيا. هدفنا تقديم كافة خدمات الرعاية الطبية بمواصفات الدرجة الاولى و التي تكفل حصول مرضانا على العلاج اللازم في المستشفيات و العيادات الالمانية المجهزة بأحدث التقنيات الطبية في العالم على يد نخبة من أمهر الأطباء الإختصاصيين الالمان الحاصلين على شهادة استاذ * بروفسور* في الاختصاص الطبي .</p>
                    <br>
                    <br>
                </div>
            </div>
            <div class="col s12 m12  serv" style="background-image: url({{ URL::to('img/manage.jpg')  }});background-size: cover; background-repeat: no-repeat;">
                <div class="container"  >
                    <h3 class="right-align orange-text flow-text" style="font-size: 22pt"> نضام الادارة</h3>
                    <div class="divider"></div>
                    <p  class="right-align flow-text" style="font-size: 15pt" >حمد هيلث كير تعتمد الادارة الألمانية في تحديد الأطر العريضة للعمل الخدمي في جميع مراحله الفكرية و التطبيقية و الرقابية إبتداء من إدارة الخدمة مروراً بالرقابة على الجودة الخدمية و إنتهاء بالرقابة الادارية مما يجعل خدماتنا خدمة المانية بأمتياز تتمتع بمميزات الجودة الالمانية العريقة و المعروفة في دول الخليج العربي على وجه الخصوص نتيجة للعلاقات الاقتصادية الإستراتيجية المتميزة بين المانيا و دول مجلس التعاون الخليجي .</p>
                    <br>
                </div>
            </div>

            <div class="col s12 m12 serv" style="background-image: url({{ URL::to('img/map.jpg')  }});background-size: cover; background-repeat: no-repeat;">
                <div class="container"  >
                    <h3 class="right-align orange-text flow-text" style="font-size: 22pt">هدفنا صحتكم</h3>
                    <div class="divider"></div>
                    <p  class="right-align flow-text" style="font-size: 15pt" > . ان تخصصنا بتقديم خدمات الرعاية الطبية للمرضى العرب نابع من حقيقة ازدياد السياحة الطبية العربية الوافدة الى جمهورية المانيا الاتحادية في السنوات القليلة الماضية وبالأخص مدينة ميونخ , و حرصنا على تقديم كافة الخدمات و التسهيلات اللازمة لإتمام رحلة علاجكم الناجحة . الامر الذي دفع القسم الاعظم من المرضى العرب الى التفكير بالعلاج في الدول الاوروبية المتقدمة و على راسها جمهورية المانيا الاتحادية وبالأخص مدينة ميونخ نظرا لما تتمتع به من شهرة و قدرة تنافسية عالمية في هذا المجال في العديد من الاختصاصات الطبية . حمد هيلث كير يتشرف بان يضع بين ايديكم ثمرة خبرات فريق عمله المؤلف من كفاءات حاصلة على خبرة كافية ومتمكنة في مجال الخدمي و الترجمة و على دراية كامله بعادات و تقاليد و متطلبات و خصوصيات المجتمع العربي الخليجي بالإضافة الى التمكن الكامل من اللغة العربية * باللهجة الخليجية* و اللغة الألمانية. </p>
                    <br>
                </div>
            </div>
            <div class="col s12 m12 serv" style="background-image: url({{ URL::to('img/hospital.jpg')  }});background-size: cover; background-repeat: no-repeat;">
                <div class="container"  >
                    <h3 class="right-align orange-text flow-text" style="font-size: 22pt"> مركزنا </h3>
                    <div class="divider"></div>
                    <p  class="right-align flow-text" style="font-size: 15pt" > يقع مكتب مؤسسة حمد هيلث كير في مبنى مستشفى أيزر الذي حصل على شهرة واسعة خلال السنوات القليلة الماضية بما يضم على أشهر الأطباء في اختصاصات متنوعة نحن في حمد هيلث كير للخدمات الطبية وكافة شركائنا من مستشفيات ومراكز طبية يسعدنا أن نكون بمساعدتكم في التخطيط و التنفيذ المسؤول لرحله علاجكم الناجحة ان شاء الله عبر كافة المراحل إبتداء من الاتصال بنا للأستفسار المبدئي مرورا بالتخطيط للعلاج و تلقي العلاج و حتى رجوعكم الى بلدكم سالمين. ‏ </p>
                    <br>
                </div>
            </div>
        </div>

    <div class="row serv " style="background-color:#000;min-height:420px;margin-top:0px;background-repeat:no-repeat; background-size:cover;background-image:url({{ URL::to('img/logo_call.jpg') }});padding: 30px 0;margin-bottom:0px !important; opacity: 1;filter:blur(0px); " >
        <div class="container " >
            <form  action="{{ route('email') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col s12 " >
                    <h3 class="orange-text flow-txet right-align  font"  style="font-size: 22pt">اشترك بالقائمة البريدية لتصلك كل جديد </h3>
                </div>
                <div class="col s12 " style="margin-bottom:20px;"><div class="divider"></div></div>
                <div class="col s12 m12 l9" >
                    <div class="input-field right-text right-align">
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

    <div class="row white z-depth-5  grey lighten-4 " style="margin-top:0px !important;margin-bottom:0px;">
        <div class="row white-text hoverable font" style="margin-bottom: 0px;">
            <div class="col s12 m12 serv" style=" background-image: url({{ URL::to('img/map.jpg')  }});background-size: cover; background-repeat: no-repeat;height:650px !important;opacity: 1 !important; filter:blur(0px) !important;">
                <div class="container"  >
                    <h3 class="right-align orange-text flow-text" style="font-size: 22pt">موقعنا على خرائط كوكل</h3>
                    <div class="divider"></div>
                    <iframe width="100%" class="map"  style="margin-top:30px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d182.89546079238485!2d11.5643946!3d48.1355039!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479ddf587ddbdb97%3A0x7c3060856ed08419!2sHamad+Health+Care!5e1!3m2!1sar!2sjo!4v1475395411482" frameborder="0"></iframe>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
