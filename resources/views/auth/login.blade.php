@extends('layouts.app')

<style type="text/css">
    .sombra{
      
        display: -ms-flexbox;
        display: flex;
        padding: 1rem;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 70%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0,0,0,.2);
        border-radius: 1.1rem;
        outline: 0;
        max-width: 700px;
        height: 530px; 
        background-color: red;      

    }
    .completo{       
      
        margin-bottom: 80px;
        margin-left: 265px;

    }
    .card-header{
        text-align: center;
    }

    .foto{
        text-align: center;
    }


</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 completo">
            <div class="card sombra">
                <div class="card-header"><strong>{{ __('Inicio de sesión') }}</strong></div>
                <br>
                <div class="row foto">
                    <div class="col">
                        <span class="profile-img">
                            <i class='fas fa-user-circle' style='font-size:120px'></i>
                        </span>
                    </div>
                </div>
                <div class="row">
                            <div class="col">
                                <hr> <!-- other content  -->
                            </div>
                        </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row"> 
                            <div class="col-md-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fas fa-user"></i>
                                    </span>                                
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Usuario">
                                </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="fas fa-key"></i>
                                    </span> 
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Contraseña">
                            </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                       

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Acceder') }}  &nbsp <i class="fas fa-user-check"></i> 
                                </button>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-3">  
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidó su contraseña?') }}
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
@endsection
