{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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

    <div class="card card-shadowed p-50 w-600 mb-0" style="max-width: 100%">
      <h5 class="text-uppercase text-center">Create an account</h5>
      <br>
      <div class="text-center">
        <a class="btn btn-circular btn-sm btn-facebook mr-4" href="#"><i class="fab fa-facebook"></i></a>
        <a class="btn btn-circular btn-sm btn-google mr-4" href="#"><i class="fab fa-google"></i></a>
        <a class="btn btn-circular btn-sm btn-twitter" href="#"><i class="fab fa-twitter"></i></a>
      </div>

      <div class="divider">Or Sign Up With</div>

      <form method="POST" action="{{route('register')}}">
        @csrf
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input type="text" style="color:black" class="form-control  @error('firstName') is-invalid @enderror" placeholder="First name" name="firstName">
                    @error('firstName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                     @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <input type="text" style="color:black" class="form-control @error('lastName') is-invalid @enderror" placeholder="Last name" name="lastName">
                    @error('lastName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                     @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input type="text" style="color:black" class="form-control @error('address') is-invalid @enderror" placeholder="Adresse" name="address">
                    @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                     @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <input type="text" style="color:black" class="form-control @error('commune') is-invalid @enderror" placeholder="Commune" name="commune">
                    @error('commune')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                     @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <select style="color:black" class="form-control @error('wilaya') is-invalid @enderror" name="wilaya">
                        <option value="" selected disabled>Votre wilaya</option>
                        <option value="adrar" >Adrar</option>
                    </select>
                    @error('wilaya')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                     @enderror
                </div>
            </div>
           
            <div class="col">
                <div class="form-group">
                    <input type="text" style="color:black" class="form-control @error('phone') is-invalid @enderror" placeholder="+213 " name="phone">
                    @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                     @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input type="email" style="color:black" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" name="email">
                    @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                     @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <input type="text" style="color:black" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username">
                    @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                     @enderror
            </div>
    
            </div>
           
        </div>
        
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input type="password" style="color:black" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                        <input id="password-confirm" style="color:black" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required >
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        
        <input type="hidden" name="role" value="client">

        <div class="form-group">
          <button class="btn btn-bold btn-block btn-success text-dark" style="font-size:0.9rem" type="submit">Register</button>
        </div>
      </form>

      

      <p class="text-center text-muted fs-13 mt-20">You already have an account? <a href="{{route('login')}}">Sign In</a></p>
    </div>

@endsection

