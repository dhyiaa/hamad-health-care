<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::to('admin/assets/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ URL::to('admin/assets/img/favicon.png') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>لوحة التحكم </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="{{ URL::to('admin/assets/css/bootstrap.min.css')  }}" rel="stylesheet" />
    <link href="{{ URL::to('admin/assets/css/material-dashboard.css') }}" rel="stylesheet"/>
    <link href="{{ URL::to('admin/assets/css/demo.css') }}" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

</head>
<body>

@if (count($errors) > 0)
<div class="row">
    <div class="contaner">
        <div id="modal1" class="modal" style="height: 200px;">
            <div class="modal-content">
                <h4 class="font red-text">error !!!</h4>
                @foreach ($errors->all() as $error)
                    <p class="font red-text">{{ $error }} </p>
                @endforeach
            </div>
        </div>
    </div>
</div>
@elseif(session()->has('msg') )
    <div class="row" class="">
        <div class="contaner">
            <div id="modal1" class="yellow"  >
                <div class="modal-content" class=" white-text " style="padding:30px;top:0px;">
                    <p class="font center-align green-text flow-text">{{ session()->pull('msg') }} </p>
                </div>
            </div>
        </div>
    </div>
@endif

    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                Creative Tim
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active">
                    <a href="{{ route('admin.home')  }}">
                        <i class="material-icons">dashboard</i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.user_edit')  }}">
                        <i class="material-icons">person</i>
                        <p> Edit User Info </p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.med_asks')  }}">
                        <i class="material-icons">content_paste</i>
                        <p>User Med Asks</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.email_list')  }}">
                        <i class="material-icons">library_books</i>
                        <p>E-mail List</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.website.on')  }}">
                        <i class="material-icons">bubble_chart</i>
                        <p>Turn On</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.website.off')  }}">
                        <i class="material-icons">location_on</i>
                        <p>Turn Off</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.logout') }}">
                        <i class="material-icons">lock_outline</i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"> Welcome Ala hamad </a>
                </div>
            </div>
        </nav>
        <div class="content">
            @yield('content')
        </div>
    </div>
    <script src="{{ URL::to('admin/assets/js/jquery-3.1.0.min.js')  }} " type="text/javascript"></script>
    <script src="{{ URL::to('admin/assets/js/bootstrap.min.js')  }} " type="text/javascript"></script>
    <script src="{{ URL::to('admin/assets/js/bootstrap-notify.js')  }} "></script>
    <script src="{{ URL::to('admin/assets/js/material.min.js')  }} " type="text/javascript"></script>
    <script src="{{ URL::to('admin/assets/js/chartist.min.js')  }} "></script>
    <script src="{{ URL::to('admin/assets/js/material-dashboard.js')  }}"></script>
    <script src="{{ URL::to('admin/assets/js/demo.js')  }} "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){demo.initDashboardPageCharts();});
        $(document).ready(function(){$('#collapsible').collapsible();});
            $('#modal1').modal({
                dismissible: true,
                opacity: 0,
                in_duration: 400,
                out_duration: 200
            });
        $('#modal1').delay("fast").modal('open');
    </script>
</body>
</html>