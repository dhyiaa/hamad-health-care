<html>
    <head>
        <meta charset="UTF-8">
        <title>Animated login form</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
        <link rel="stylesheet" href="{{ URL::to('style/materialize.min.css') }}"/>
        <link rel="stylesheet" href="{{ URL::to('admin/login.css')  }}"/>
    </head>
    <body>
    @if (count($errors) > 0)
        <div id="modal1" class="modal" style="margin-top:100px;">
            <div class="modal-content">
                <h4 class="font red-text">error !!!</h4>
                @foreach ($errors->all() as $error)
                    <p class="font red-text">{{ $error }} </p>
                @endforeach
            </div>
            <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close red white-text waves-effect waves-grey btn-flat">close</a>
            </div>
        </div>
    @endif

    @if (session()->has('msg') )
        <div id="modal1" class="modal" style="margin-top:100px;">
            <div class="modal-content">
                <p class="font center-align green-text">{{ session()->pull('msg') }} </p>
            </div>
            <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close red white-text waves-effect waves-grey btn-flat">close</a>
            </div>
        </div>
    @endif
        <div class="wrapper">
            <form class="login" action="{{ route('admin.login')  }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p class="title">Log in</p>
                <input type="text" name="name" placeholder="Username" autofocus/>
                <i class="fa fa-user"></i>
                <input type="password" name="Password" placeholder="Password" />
                <i class="fa fa-key"></i>
                <p>
                    <input type="checkbox" name="remember" id="test6" checked="checked" />
                    <label for="test6">Remember me</label>
                </p>
                <button>
                    <i class="spinner"></i>
                    <span class="state">Log in</span>
                </button>
            </form>
        </div>
    <script  type="text/javascript" src="{{ URL::to('js/jquery-3.1.1.min.js') }}"></script>
    <script  type="text/javascript" src="{{ URL::to('js/materialize.min.js') }}"></script>
    <script type="text/javascript">
        $('#modal1').delay("slow").modal({
            dismissible: true,
            opacity: .2,
            in_duration: 400,
            out_duration: 200,
            starting_top: '-100',
            ending_top: '30%',
        });
        $('#modal1').delay("fast").modal('open');
    </script>
    </body>
</html>