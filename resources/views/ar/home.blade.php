@extends('ar.layout.layout')
@section('key-word')
  شركة حمد للرعاية , حمد ,رعاية ,المانيا ,علاج , المانيا ,  علاء حمد , مستشفى المانيا , ترجمة الماني , ترجمة
@endsection
@section('desc')
  hamad_ala@yahoo.de  :  الرئيسية : شركة حمد هي شركة توفر لك كل وسائل الراحة واللاج و السلامة في المانيا لعلاج افضل و صحة افضل الايميل :
@endsection
@section('title')
  الرئيسية | حمد للرعاية
@endsection
@section('logo-title')
  اهتمامنا الوحيد صحتك و سعادتك
@endsection
@section('logo-img')
callus.jpg
@endsection
@section('logo-con')
  هدفنا تقديم كافة خدمات الرعاية الطبية بمواصفات الدرجة الاولى و التي تكفل حصول مرضانا على العلاج اللازم في المستشفيات و العيادات الالمانية
@endsection
@section('logo-links')
  <div class="row font" >
    <div class="col s12 center ">
      <a href="{{ route('about')  }}" title="من نحن" class="waves-effect waves-light btn-large orange darken-2 white-text circle " >
        <i class="fa fa-question" aria-hidden="true"></i>
        <span style="line-height: 1.8">&nbsp;&nbsp;&nbsp; من نحن &nbsp; </span>
      </a>

      <a href="{{ route('callus')  }}" title="اتصل بنا" class="waves-effect circle waves-light btn-large white orange-text darken-2   "  style="margin-left: 5px;">
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
  <div class="row white z-depth-5  grey lighten-5 " style="margin-top:0px !important;margin-bottom:0px;" id="#first">
    <div class="row white-text hoverable font" style="margin-bottom: 0px;">
      <div class="col s12  m12  l12  serv" style="background-image: url({{ URL::to('img/trans.jpg')  }});background-size: cover; background-repeat: no-repeat;">
        <div class="container"  >
          <h3 class="right-align  orange-text flow-text" style="font-size: 22pt">خدمات ترجمة</h3>
          <div class="divider"></div>
          <p  class="right-align flow-text" style="font-size: 15pt" >نقدم لكم افضل خدمات الترجمة بالهاتف او مع مرافق يتحدث الالماني و العربي لكي نسهل عليكم التنقلات في المانيا في اي وقت و اي مكان في المانيا فقط اتصل بنا وسوف نرسل لك مساعد شخصي و مترجم</p>
          <br>
          <br>
          <div class="row center  center-align ">
            <a href="{{ route('callus')  }}" class="btn-css right  btn btn-large  white darken-2 orange-text waves-effect waves-dark btn-floating  tooltipped" data-position="bottom" data-delay="50" data-tooltip="اتصل بنا" ><i class= "material-icons  orange-text " style="font-size: 20px; margin-right: 20px; margin-top:3px;" aria-hidden="true" >phone</i>  </a>
          </div>
        </div>
      </div>
      <div class="col s12  m12  l6   serv" style="background-image: url({{ URL::to('img/med-check.jpg')  }});background-size: cover; background-repeat: no-repeat;">
        <div class="container"  >
          <h3 class="right-align orange-text flow-text" style="font-size: 22pt"> نقدم لكم افضل برامج العلاج </h3>
          <div class="divider"></div>
          <p  class="right-align flow-text" style="font-size: 15pt" >نقدم لكم افضل خدمات الترجمة بالهاتف او مع مرافق يتحدث الالماني و العربي لكي نسهل عليكم التنقلات في المانيا في اي وقت و اي مكان في المانيا فقط اتصل بنا وسوف نرسل لك مساعد شخصي و مترجم</p>
          <br>
          <br>

        </div>
      </div>
      <div class="col s12 m12  l6 serv" style="background-image: url({{ URL::to('img/doc2.jpg')  }});background-size: cover; background-repeat: no-repeat;">
        <div class="container"  >
          <h3 class="right-align  orange-text flow-text" style="font-size: 22pt">خدمات متابعة العلاج ما بعد السفر</h3>
          <div class="divider "></div>
          <p  class="right-align flow-text" style="font-size: 15pt" > بحيث نجمع جميع ملفاتك العلاجية و نخزنها عندنا وعندما تحتاج لها سوف نزودك بها اضافتاً الى مراجعة الاطباء من خلال الملفات ثم ارسال النتيجة لك  و باسرع وقت
            <br>
            <br>

        </div>
      </div>
      <div class="col s12 m12  l12  serv" style="background-image: url({{ URL::to('img/vip.jpg')  }});background-size: cover; background-repeat: no-repeat;">
        <div class="container"  >
          <h3 class="right-align orange-text flow-text" style="font-size: 22pt">خدمات خاصة لكبار الشخصيات</h3>
          <div class="divider"></div>
          <p  class="right-align flow-text" style="font-size: 15pt" >افضل الخدمات والمستلزمات لكبار الشخصيات و المشاهير لتسهيل  المراجعة لموعد الاطباء و الحجوزات و نقدم لهم مرافقة خاصة الى اي مكان مع مترجمين مختصين و خدمات النقل حتى من المطار وحجوزات الفنادق </p>
          <br>
          <br>

        </div>
      </div>
      <div class="col s12 m12  l6  serv" style="background-image: url({{ URL::to('img/car.jpg')  }});background-size: cover; background-repeat: no-repeat;">
        <div class="container"  >
          <h3 class="right-align orange-text flow-text" style="font-size: 22pt">خدمات تنقل سيارات مع سائق</h3>
          <div class="divider"></div>
          <p  class="right-align flow-text" style="font-size: 15pt" >ان كنت تريد التنقل في المانيا بشكل اسرع و منظم فهذا العرض سوف يعجبك لاننا نوفر طاقم عمل لنقل  المسافرين الى جميع مناطق المانيا لنقل اسرع وأمن ..</p>
          <br>
          <br>

        </div>
      </div>
      <div class="col s12 m12  l6  serv" style="background-image: url({{ URL::to('img/tour.jpg')  }});background-size: cover; background-repeat: no-repeat;">
        <div class="container"  >
          <h3 class="right-align orange-text flow-text" style="font-size: 22pt">خدمات السياحية والترفية</h3>
          <div class="divider"></div>
          <p  class="right-align flow-text" style="font-size: 15pt" >نقدم لكم جميع  الخدمات السياحية كالفنادق ومرافقه الى الاماكن السياحية و مدن الالعاب و المناضر الطبيعية الخلابة و كل شئ تتوقعونه من جمال المانيا مع خدمات نقل من المطار</p>
          <br>
          <br>

        </div>
      </div>
      <div class="col s12 m12  l12  serv" style=" background-image: url({{ URL::to('img/check.jpg')  }});background-size: cover; background-repeat: no-repeat;">
        <div class="container"  >
          <h3 class="right-align orange-text flow-text" style="font-size: 22pt">فحص طبي متكامل  </h3>
          <div class="divider"></div>
          <p  class="right-align flow-text" style="font-size: 15pt" >عند انضمامك لهذا البرنامج ، سيتحدث إليك الطبيب خلال زيارتك الاولى عن التاريخ الصحي أوالمرضي لك ولعائلتك ، وستستطيع مناقشة أمور تقلقك مع الطبيب الخاص بك حيث ستعملان سوياً لتطوير خطة عمل للاهتمام بصحتك . كما ستتمكن أيضا خلال زيارتك الاولى من إجراء العديد من الاختبارات والفحوصات والتي يستطيع الطبيب المعالج من خلالها تقييم حالتك الصحية الحالية. خلال ثلاث ايام من زيارتك الأولى سيتم ترتيب زيارة متابعة ، لمناقشة نتائج الفحوصات والاختبارات وتحديد الاجراء المطلوب اتخاذه بناءاً على هذه النتائج.</p>
          <br>
          <br>

        </div>
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
