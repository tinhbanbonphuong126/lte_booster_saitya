<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>サティヤ不動産 管理画面</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/AdminLTE.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="shortcut icon" href="{{ asset("favicon.ico") }}" type="image/png"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .login-logo, .register-logo {
            font-size: 20px;
        }
    </style>

</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/home') }}"><b>サティヤ不動産 </b>管理画面</a>
    </div>

    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">ログイン</p>

        <form method="post" id="formLogin" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="ユーザーID">
                <span style=" display: none" class="glyphicon glyphicon-envelope form-control-feedback"></span>
                {{--@if ($errors->has('email'))--}}
                    {{--<span class="help-block">--}}
                    {{--<strong>{{ $errors->first('email') }}</strong>--}}
                {{--</span>--}}
                {{--@endif--}}
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="パスワード" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

            </div>

            <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
                @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>

            <div class="row">
                {{--<div class="col-xs-8">--}}
                    {{--<div class="checkbox icheck hidden">--}}
                        {{--<label>--}}
                            {{--<input type="checkbox" name="remember"> Remember Me--}}
                        {{--</label>--}}
                    {{--</div>--}}
                    {{--<a style="margin-top: 12px;display: inline-block; display: none;" href="{{ url('/password/reset') }}">パスワードを忘れた場合は</a><br>--}}
                {{--</div>--}}
                <!-- /.col -->
                <div class="col-xs-6 col-xs-offset-3">
                    <button id="btnSubmit" type="submit" class="btn btn-primary btn-block btn-flat" style="padding-left: 0;padding-right: 0;text-align: center;">サインイン</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/js/app.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });


        //Script prevent double click
        $('#btnSubmit').on('click', function () {
            $(this).val('Please wait ...').attr('disabled', 'disabled');
            $('#formLogin').submit();
        });
    });
</script>
</body>
</html>
