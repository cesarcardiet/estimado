<div class="modal fade" id="ajaxModel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title" id="modelHeading"></h4>

            </div>

            <div class="modal-body">

                <form method="PUT" id="employeeForm" name="employeeForm">
                    @csrf

                    <input type="hidden" name="employee_id" id="employee_id">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">

                            <input id="name" type="text"
                                class="form-control form-control-user @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">

                        </div>
                        <div class="col-md-6">
                            <input id="lastname" type="text"
                                class="form-control form-control-user @error('lastname') is-invalid @enderror"
                                name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus
                                placeholder="Apellido">


                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input id="nuip" type="text"
                                class="form-control form-control-user @error('nuip') is-invalid @enderror" name="nuip"
                                value="{{ old('nuip') }}" required autocomplete="nuip" autofocus placeholder="Cedula">
                        </div>
                        <div class="col-sm-6">
                            <input id="phone" type="text"
                                class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone"
                                value="{{ old('phone') }}" required autocomplete="phone" autofocus
                                placeholder="Telefono">
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-user btn-block" id="saveBtnEmployee">
                    </button>
                </form>
            </div>

        </div>

    </div>

</div>
