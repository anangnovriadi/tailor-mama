@extends('admin.auth.layout.app')

@section('pageTitle', 'Reset Password')

@section('content')
<body class="forgot-pass">
    <div class="forgot-box">
        <div class="card">
            <div class="body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="login-logo">
                            <p>Reset Password | Tailor Mama</p>
                        </div>
                    </div>
                </div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form id="forgot_pass" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <div class="msg">
                        Fill with your mail to receive instructions on how to reset your password.
                    </div>
                    <div class="input-group addon-line">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required="" autofocus="" />
                        </div>
                    </div>

                    <button class="btn btn-block btn-primary waves-effect" type="submit">SEND PASSWORD RESET LINK</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="./log_in.html">You already have an account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection