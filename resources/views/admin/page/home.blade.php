@extends('admin.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                            <img class="img" src="{{ URL::to('admin/assets/img/faces/hamad.jpg')  }}" />
                        </a>
                    </div>

                    <div class="content">
                        <h4 class="card-title">Alaa Hamad </h4>
                        <h6 class="category text-gray">WellCome</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="orange">
                        <i class="material-icons">content_copy</i>
                    </div>
                    <div class="card-content">
                        <p class="category"> Subscribed users</p>
                        <h3 class="title"> {{ $email_number  }} <small>  mumber</small></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="green">
                        <i class="material-icons">error_outline</i>
                    </div>
                    <div class="card-content">
                        <p class="category">Medicine Asks</p>
                        <h3 class="title"> {{ $new_asks_num  }} <small> New Questions </small> </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card card-stats">
                    <div class="card-header" data-background-color="blue">
                        <i class="material-icons">web</i>
                    </div>
                    <div class="card-content">
                        <p class="category">website </p>
                        <h3 class="title"> {{ $web_con  }} </h3>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer class="footer">
        <div class="container-fluid">
            <p class="copyright " style="margin:0 auto;">
            <h5 class="center-align center" style="text-align: center;">made by dhiaa husham with love for uncle <script>document.write(new Date().getFullYear())</script>&copy; </h5>
            </p>
        </div>
    </footer>
@endsection