@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
@section('content')

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{url('/')}}"><b><img src="{{asset('images/logo.png')}}" width="85%"
            alt=""></b></a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Se connecter pour ouvrir</p>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="col-md-12">
                        <label for="">E-mail de connexion</label>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Email" @error('email') is-invalid
                                @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                autofocus>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                      <span class="fas fa-envelope"></span>
                                    </div>
                                  </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="">Mot de passe</label>
                        <div class="input-group">
                            <input type="password" class="form-control" placeholder="Mot de passe" @error('password')
                                is-invalid @enderror" name="password" required autocomplete="current-password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                      <span class="fas fa-lock"></span>
                                    </div>
                                  </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Se connecter') }}
                        </button>
                    </div>
                    <div class="col-md-12">
                             <span class="text-red">
                                @if (Route::has('register'))
                                <a class="text-red" href="{{ route('register') }}">
                                    {{ __("S'inscrire maintenant") }}
                                </a>
                                @endif
                            </span> 
                            <span class="float-right">
                                  @if (Route::has('password.request'))
                                   <a href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                    @endif
                            </span>
                    </div>
                   
                    {{-- @php
                    $users = Auth::user();
                     @endphp --}}
                 {{-- <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                              <input type="checkbox" id="remember">
                              <label for="remember">
                                Remember Me
                              </label>
                            </div>
                          </div>
                      </div> --}}
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>

    </div>
</body>
@endsection