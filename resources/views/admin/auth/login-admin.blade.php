@extends('admin.auth.layout.app')

@section('pageTitle', 'Login')

@section('content')
<body class="login-page">
    <div class="login-box">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="login-logo">
                            <img src="{{ asset('admin/assets/images/logo-circle.png') }}" alt="" class="img-responsive img-circle align-center" />
                            <p>Login | Tailor Mama</p>
                        </div>
                    </div>
                </div>
                <form id="log_in" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="input-group addon-line">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="Email" required="" autofocus="" />
                        </div>
                    </div>
                    <div class="input-group addon-line">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 p-t-5">
                            {{--  --}}
                        </div>
                    </div>
                    <button class="btn btn-block btn-primary waves-effect" type="submit">LOG IN</button>
                </form>
            </div>
        </div>
    </div>

@endsection
