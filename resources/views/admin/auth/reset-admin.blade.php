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
                <form id="forgot_pass" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

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
                    <div class="input-group addon-line">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required="" />
                        </div>
                    </div>
                    <div class="input-group addon-line">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required="" />
                        </div>
                    </div>

                    <button class="btn btn-block btn-primary waves-effect" type="submit">RESET PASSWORD</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="./log_in.html">You already have an account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection