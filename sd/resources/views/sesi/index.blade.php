@extends('app')

@section('content')

@extends('msg.msg')


<title>Login Admin Al-Barkah</title>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>Admin</b> <br> Al-Barkah</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="/sesi/login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" value="{{ Session::get('email') }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="d-grid">
                        <button name="submit" type="submit" class="btn btn-primary">Sign In</button>
                    </div>
            </div>
            </form>
        </div>

    </div>
</body>
@endsection