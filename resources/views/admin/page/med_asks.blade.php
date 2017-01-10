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
                            <table class="centered" style="direction: rtl;text-align: center;" >
                                <thead >
                                <tr>
                                    <th><h5 class="font flow-text"> الاسم الاول</h5></th>
                                    <th><h5 class="font flow-text">الاسم الثاني </h5></th>
                                    <th><h5 class="font flow-text">الايميل </h5></th>
                                    <th><h5 class="font flow-text"> الاستشارة</h5></th>
                                    <th><h5 class="font flow-text"> حذف </h5></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $asks as $ask  )
                                    <tr>
                                        <td><p class="font ">{{ $ask->f_name }}</p></td>
                                        <td><p class="font ">{{ $ask->l_name }}</p></td>
                                        <td><p class="font ">{{ $ask->email }}</p></td>
                                        <td><a class="font " href="{{ route('admin.get_ask' , $ask->id ) }}"> تشغيل الاستشارة </a></td>
                                        <td><a class="font red-text " href="{{ route('admin.del_ask' , $ask->id ) }}"> <i class="material-icons">delete</i>  </a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                           <div class="center grey lighten-2">
                               {{ $asks->render()  }}
                           </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection