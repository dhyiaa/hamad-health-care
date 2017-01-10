@extends('ar.layout.layout')
@section('key-word')
    شركة حمد للرعاية , حمد ,رعاية ,المانيا ,علاج , المانيا ,  علاء حمد , مستشفى المانيا , ترجمة الماني , ترجمة
@endsection
@section('desc')
    نوفر لكم افضل  برامج الفحوصات  للفحص المبكر عن اي امراض باشراف افضل  الاطباء الالمان
@endsection
@section('title')
    الفحص الطبي | حمد للرعاية
@endsection
@section('logo-title')
نقدم لكم افضل الفحوصات  الطبية لصحة افضل
@endsection
@section('logo-img')
logo_home.jpg
@endsection
@section('logo-con')
عند انضمامك لهذا البرنامج ، سيتحدث إليك الطبيب خلال زيارتك الاولى عن التاريخ الصحي أوالمرضي لك ولعائلتك ، وستستطيع مناقشة أمور تقلقك مع الطبيب الخاص بك حيث ستعملان سوياً لتطوير خطة عمل للاهتمام بصحتك
@endsection
@section('logo-links')
    <div class="row font" >
        <div class="col s12 center ">
            <a href="{{ route('callus')  }}" title=" اتصل بنا" class="waves-effect circle waves-light btn-large white-text orange darken-2   " target="_self" style="margin-left: 5px;">
                <i class="material-icons">call</i>
                <span></span> اتصل بنا
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
            <div class="col s12 m12 serv" style="background-image: url({{ URL::to('img/doc3.jpg')  }});background-size: cover; background-repeat: no-repeat;min-height:500px !important; height: auto; position: relative;">
                <div class="container"  >
                    <h3 class="right-align  orange-text flow-text" style="font-size: 22pt">يشمل البرنامج الاساسي</h3>
                    <div class="divider"></div>
                    <p  class="right-align flow-text" style="font-size: 15pt" >برنامج الفحص الطبي الشامل يقدم الفحوصات الطبية والفحوصات الخاصة للكشف المبكر عن الأمراض بأحدث الأجهزه الطبية
برنامج الفحص الطبي الشامل المطور ويتضمن عمل الفحوصات التالية</p>

                    <ul class="ul- right-align orange-text flow-text"  >
                        <li>فحوصات كيمياء الدم</li>
                        <li>تحليل البول</li>
                        <li>تحليل براز لفحص البويضات والطفيليات</li>
                        <li>فحص الكبد الوبائي (C) و (B)</li>
                        <li>الفحص المبكر لسرطان البروستاتا للرجال فوق سن الاربعين. (PSA) الانتيجين السطحي الخاص بغدة البروستاتا</li>
                        <li>التخطيط الكهربائي للقلب بدون مجهود (ECG) ,حيث يقوم الجهاز بتسجيل النشاط الكهربائي للقلب ، بغرض الكشف عن اية مشكلات صحيه بالقلب والاوعية الدموية.</li>
                        <li>مراجعة وتحديث الادوية .</li>
                        <li>عمل أشعه إكس للصدر</li>
                        <li>الفحص الخاص بتحليل محتويات الجسم .</li>
                        <li>فحص العيون .</li>
                        <li>فحص الاسنان .</li>
                        <li>مراجعه التطعيمات وأيضاً العلاجات التي يحتاج إليها خلال الرحلات .</li>
                    </ul>
                    <div class="divider"></div>
                    <p  class="right-align flow-text" style="font-size: 15pt" >برنامج الفحص الطبي الشامل يقدم الفحوصات الطبية والفحوصات الخاصة للكشف المبكر عن الأمراض بأحدث الأجهزه الطبية وأما بالنسبة الى الفحوصات الإضافية فهي متوفره حسب الطلب أوالحاجة وطبقاً للتاريخ الصحي والمرضي ولكنها لا تخضع للتكلفة الأساسية للبرنامج.</p>
                    <p class=" orange-text right-align flow-text" style="font-size: 15pt" >يفضل حجز الموعد قبل حضورك للمستشفى حتى نتمكن من خدمتكم بشكل أفضل.</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>

            </div>
        </div>
    </div>
    <div class="row serv " style="background-color:#000;min-height:420px;margin-top:0px;background-repeat:no-repeat; background-size:cover;background-image:url({{ URL::to('img/logo_call.jpg') }});padding: 30px 0;margin-bottom:0px; " >
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
@endsection
