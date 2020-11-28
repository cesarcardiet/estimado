@extends('layouts.apphome')
@section('content')
    <div class="card col-sm-12" style="margin-left:auto;">
        <div class="card-header bg-transparent"><strong>Editar perfil.</strong></div>
        <div class="card-body t" id="infocredito">
            <form method="POST" id="userForm" name="userForm">
                @csrf

                <input type="hidden" name="user_id" id="user_id">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input id="name" type="text"
                            class="form-control form-control-user @error('name') is-invalid @enderror" name="name"
                             value="{{$user->name}}" required autocomplete="name" autofocus placeholder="Nombre">

                    </div>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="Correo" name="email" value="{{ $user->email}}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="Contraseña" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-sm-6">
                        <input id="password-confirm" type="password" class="form-control" placeholder="Confirmar Contraceña"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block" id="saveBtn" value="create">
                    {{ __('Actualizar') }}
                </button>
            </form>
        </div>
        <hr>

    </div>


@endsection
