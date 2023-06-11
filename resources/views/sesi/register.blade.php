@extends('app')

@section('content')

@extends('msg.msg')


<title>Register Admin Al-Barkah</title>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href=""><b>Admin</b> <br> Al-Barkah</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body register-card-body">
                <p class="register-box-msg">Register</p>

                <form action="/sesi/create" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" value="{{ Session::get('name') }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" value="{{ Session::get('email') }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="d-grid">
                        <button name="submit" type="submit" class="btn btn-primary">Register</button>
                    </div>
            </div>
            </form>
        </div>

    </div>
</body>
@endsection