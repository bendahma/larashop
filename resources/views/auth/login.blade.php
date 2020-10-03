{{-- @extends('layouts.app')

@section('content')
<div class="container">
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
</div>
@endsection --}}

@extends('layouts.AuthTemplate')

@section('content')

    <div class="card card-shadowed p-50 w-400 mb-0" style="max-width: 100%">
      <h5 class="text-uppercase text-center">Login</h5>
      <br>
      <div class="text-center">
        <a class="btn btn-circular btn-sm btn-facebook mr-4" href="#"><i class="fab fa-facebook"></i></a>
        <a class="btn btn-circular btn-sm btn-google mr-4" href="#"><i class="fab fa-google"></i></a>
        <a class="btn btn-circular btn-sm btn-twitter" href="#"><i class="fab fa-twitter"></i></a>
      </div>

      <div class="divider">Or Sign In With</div>

      <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="form-group">
          <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Username" name="username">
          @error('username')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>

        <div class="form-group">
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group flexbox py-10">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Remember me</span>
          </label>

          <a class="text-muted hover-primary fs-13" href="#">Mote de passe oublie?</a>
        </div>

        <div class="form-group">
          <button class="btn btn-bold btn-block btn-primary" type="submit">Se connecté</button>
        </div>
      </form>

      

      <p class="text-center text-muted fs-13 mt-20">Vous n'avez pas un compte? <a href="{{route('register')}}" class="btn btn-outline-success">S'inscrire</a></p>
    </div>

@endsection
