{{-- @extends('adminlte::auth.login') --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inicio de sesion de Biblioteca">
    <meta name="keywords" content="Libro, Sistemas, Informe, UNA-PUNO">

    <!-- Estilos Css -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/login.css">
    <!-- Titulo de la pagina -->
    <title>Inicio de Sesión</title>
</head>

<body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-5">
          <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5">Iniciar Sesion</h5>
              <form  method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-floating mb-3">
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}">
                  <label>{{ __('Ingrese usuario') }}</label>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-floating mb-3">
                  <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" >
                  <label>{{ __('Ingrese contraseña') }}</label>
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" value="">
                  <label class="form-check-label" for="rememberPasswordCheck">
                    Recordarme
                  </label>
                </div>
                <div class="d-grid">
                    <button class="btn btn-dark btn-lg" type="submit">Iniciar Sesión</button>
                </div>
                <hr class="my-4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>