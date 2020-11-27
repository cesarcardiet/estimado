@extends('layouts.app')

@section('content')
<body class="bg-gradient-primary"> 

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear Cuenta!</h1>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                        @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        
                                            <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">

                                    </div>
                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control form-control-user @error('apellido') is-invalid @enderror" apellido="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus placeholder="Apellido">

                               
                            </div>
                                </div>
                                                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="cedula" type="text" class="form-control form-control-user @error('cedula') is-invalid @enderror" cedula="cedula" value="{{ old('cedula') }}" required autocomplete="cedula" autofocus placeholder="Cedula">
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="telefono" type="text" class="form-control form-control-user @error('telefono') is-invalid @enderror" telefono="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus placeholder="Telefono">
                                    </div>
                                </div>
                                <div class="form-group">
                                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraceña" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="password-confirm" type="password" class="form-control" placeholder="Confirmar Contraceña"  name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                               
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Registra') }}
                                </button>
                                <hr>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Olvidaste la contraceña?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="index.html">Entrar!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body> 
@endsection
