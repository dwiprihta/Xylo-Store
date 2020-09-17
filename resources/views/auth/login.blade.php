@extends('layouts.auth')

@section('title')
  Login  
@endsection

@section('content')
<div class="page-content page-auth">
      <section class="store-auth" data-aos="fade-up">
        <div class="container">
            <div class="row row-login align-items-center row-align">
                <div class="col-lg-6 text-center">
                    <img src="/images/login-placeholder.png" alt="image-login-placeholder" class="w-50 mb-4 mb-lg-none">
                </div>
                <div class="col-lg-5">
                    <h2>Belanja furniture menjadi lebih mudah</h2>
                    <form action="" class="mt-3 w-75">
                        <div class="form-group">
                            <label for="userName">Username</label>
                            <input type="text" class="form-control" name="userName" id="userName">
                        </div>
                        <div class="form-group">
                            <label for="password">Username</label>
                            <input type="text" class="form-control" name="password" id="password">
                        </div>
                           <button type="submit" name="sumbit" id="btn-add" class="btn btn-success btn-block mt-4">
                            Sign to My Account
                           </button>
                           <a href="/register.html" class="btn btn-default btn-block">
                            Sign Up
                           </a>
                        </div>
                    </form>
                </div>
            </div>
      </section>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
