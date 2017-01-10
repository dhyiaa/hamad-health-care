@extends('al.layout.layout')
@section('key-word')
    شركة حمد للرعاية , حمد ,رعاية ,المانيا ,علاج , المانيا ,  علاء حمد , مستشفى المانيا , ترجمة الماني , ترجمة
@endsection
@section('desc')
    نحن نعمل مع افضل المستشفيات والمستوصفات و الصيدليات الالمانية ذات الدرجة العالية التي توفر افضل الرعاية لكم لكي تنعموا بصحة افضل وعلاج امثل
@endsection
@section('title')
شركائنا | حمد للرعاية
@endsection
@section('logo-title')نعمل مع افضل المستشفيات الالمانية@endsection
@section('logo-img')
partner.jpg
@endsection
@section('logo-con')نحن نعمل مع افضل المستشفيات والمستوصفات و الصيدليات الالمانية ذات الدرجة العالية التي توفر افضل الرعاية لكم لكي تنعموا بصحة افضل وعلاج امثل@endsection
@section('logo-links')
    <div class="row font" >
        <div class="col s12 center ">
            <a href="{{ route('about')  }}" class="waves-effect circle waves-light btn-large white blue-text darken-1  " target="_self">
                <i class="fa fa-question"></i>
                <span></span>&nbsp;&nbsp;&nbsp;&nbsp; من نحن
            </a>
        </div>
        <br><br>
        <br><br>
        <br>
    </div>
@endsection
@section('content-con')
    <div class="row white z-depth-5  grey lighten-4 " style="margin-top:0px !important;margin-bottom:0px;">
        <div class="row">
            <div class="container   " id="content" style="margin-top:0px !important; padding-top:40px;" >
                @foreach($partners as $partner)
                    <div class="col s12 m6 l4">
                        <div class="card activator  hoverable  ">
                            <div class="card-image activator waves-effect waves-green waves-block waves-light " style="margin:0px;padding-top:0px;">
                                <img alt="{{  $partner->ar_title  }}" title="{{  $partner->ar_title  }}" class="activator" src="{{ URL::to('img/partners/'.$partner->img)  }}">
                            </div>
                            <div class="card-reveal">
                                <span style="z-index: 10000;position: absolute;right: 10px;top:10px;" class="card-title grey-text text-darken-4"><i   class=" red-text  material-icons right">close</i></span>
                                <h2 style="text-align: left;font-size: 20pt" class="orange-text right-align" >{{  $partner->ar_title  }}</h2>
                                <p style="text-align: left;font-size: 16pt" clss="right-align grey right"  >{{  $partner->ar_more_info  }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
