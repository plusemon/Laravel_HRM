<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/login/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/swap.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="img/wave.png">
    <div class="container">
        <div class="img">
            <img src="img/bg2.svg">
        </div>
        <div class="login-content">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <img src="img/avatar.svg">
                <h2 class="title">Welcome Login</h2>
                @error('email')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                        required autocomplete="email" autofocus> --}}
                        <input id="email" type="email" class="input" name="email" value="admin@mail.com" equired
                            autocomplete="email" autofocus>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> --}}
                        <input id="password" type="password" class="input" value="password" name="password" required autocomplete="current-password">
                    </div>

                </div>
                @if(Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('/js/a81368914c.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
</body>

</html>
