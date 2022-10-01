@extends('user.layouts.auth', [
    'title' => 'Login',
    'login_or_register' => 'قم بتسجيل دخولك'
])

@section('content')
<div class="card-body">
    <form class="form-horizontal" method="POST" action="{{ route('login') }}" novalidate>
        @csrf

        <fieldset class="form-group position-relative has-icon-left">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="user-name" placeholder="البريد الالكتروني" value="{{ old('email') }}" required autocomplete="email" autofocus>

            <div class="form-control-position">
                <i class="ft-mail"></i>
            </div>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </fieldset>

        <fieldset class="form-group position-relative has-icon-left">

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="user-password" placeholder="كلمة السر" required autocomplete="current-password">

            <div class="form-control-position">
                <i class="la la-key"></i>
            </div>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </fieldset>

        <div class="form-group row">
            <div class="col-md-6 col-12 text-center text-sm-left">
                <fieldset>
                    <input class="chk-remember" type="checkbox" name="remember" id="remember-me" {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember-me"> تذكرني</label>
                </fieldset>
            </div>
            <div class="col-md-6 col-12 float-sm-left text-center text-sm-right">
                <a href="javascript:void(0);" class="card-link">نسيت كلمة السر</a>
            </div>
        </div>

        <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> تسجيل الدخول</button>
    </form>
</div>
<p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
    <span>ليس لديك حساب</span>
</p>

<div class="card-body">
    <a href="{{ route('register') }}" class="btn btn-outline-danger btn-block"><i class="ft-user"></i> قم بانشاء حساب جديد</a>
</div>
@endsection