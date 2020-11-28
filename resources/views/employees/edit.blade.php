@extends('layouts.apphome')

@section('content')
    <div class="card col-sm-12" style="margin-left:auto;">
        <div class="card-header bg-transparent"><strong>Editar información de empleado.</strong></div>
        <div class="card-body t" id="infocredito">
            <form method="PUT" id="employeeForm" name="employeeForm">
                @csrf

                <input type="hidden" name="employeeUpdate_id" id="employeeUpdate_id" value="{{ $employee->id }}">
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">

                        <input id="name" type="text"
                            class="form-control form-control-user @error('name') is-invalid @enderror" name="name"
                            value="{{ $employee->name }}" required autocomplete="name" autofocus placeholder="Nombre">

                    </div>
                    <div class="col-md-6">
                        <input id="lastname" type="text"
                            class="form-control form-control-user @error('lastname') is-invalid @enderror" name="lastname"
                            value="{{ $employee->lastname }}" required autocomplete="lastname" autofocus placeholder="Apellido">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input id="nuip" type="text"
                            class="form-control form-control-user @error('nuip') is-invalid @enderror" name="nuip"
                            value="{{ $employee->nuip}}" required autocomplete="nuip" autofocus placeholder="Cedula">
                    </div>
                    <div class="col-sm-6">
                        <input id="phone" type="text"
                            class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone"
                            value="{{ $employee->nuip }}" required autocomplete="phone" autofocus placeholder="Telefono">
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary btn-user btn-block" id="saveBtnEmployeeUpdate">
                    Actualizar
                </button>
            </form>
        </div>
    </div>
@endsection
