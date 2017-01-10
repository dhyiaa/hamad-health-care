@extends('admin.layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h3>Med Asks</h3>
                        </div>
                        <div class="card-content">
                            <form action="{{ route('admin.answer.ques')  }}" method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul  id="collapsible" class="collapsible" data-collapsible="accordion">
                                            <li>
                                                <div class="collapsible-header right-align font"><i class="material-icons right ">account_circle</i> اسم المريض </div>
                                                <div class="collapsible-body"><h4 class="font center-align">{{ $ask->f_name.'  '.$ask->l_name  }}</h4></div>
                                            </li>
                                            <li>
                                                <div class="collapsible-header right-align font"><i class="material-icons right">receipt</i> وصف الحالة المرضية  </div>
                                                <div class="collapsible-body"><h5  class="flow-text font center-align" style="line-height: 2">{{ $ask->ask }}</h5></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">  The answer </label>
                                            <input type="text" name="answer" style="font-size: 20pt;text-align:right;direction: rtl;"  class=" font form-control" >
                                            <input type="hidden" name="email"  value="{{ $ask->email }}" >
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Answer  The question</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    </script>
@endsection