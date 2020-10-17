@extends('layouts.AuthTemplate')

@section('pageTitle')
<title>Larashop - Créer un compte</title>
@endsection

@section('content')

    <div class="card card-shadowed p-50 w-600 mb-0" style="max-width: 100%">
      <h5 class="text-uppercase text-center">Créer un compte chez larashop</h5>      
      <div class="divider"></div>

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
                        <option value="Adrar" >Adrar</option>
                        <option value="Ain Temouchent" >Ain Temouchent</option>
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
          <button class="btn btn-bold btn-block btn-success text-dark" style="font-size:0.9rem" type="submit">S'inscrire</button>
        </div>
      </form>

      

      <p class="text-center fs-13 mt-20 ">Avez-vous Déjà un compte? <a href="{{route('login')}}" class="btn btn-outline-success">Se connecté</a></p>
    </div>

@endsection

