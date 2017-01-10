@extends('admin.layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                        <h3> E-mail list  </h3>
                        </div>
                        <div class="card-content">
                            <form action="{{ route('admin.email_list')  }}" method="post">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">  The answer </label>
                                        <input type="text" name="email" style="font-size: 20pt;text-align:right;direction: rtl;"  class=" font form-control" >
                                    </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right"> send email for Users </button>
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