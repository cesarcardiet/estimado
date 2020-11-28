<div class="modal fade" id="ajaxModel" aria-hidden="true">

    <div class="modal-dialog  modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h4 class="modal-title" id="modelHeading"></h4>

            </div>

            <div class="modal-body">

                <form method="POST" id="userForm" name="userForm">
                    @csrf

                    <input type="hidden" name="user_id" id="user_id">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input id="nameUser" type="text"
                                class="form-control form-control-user @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input id="emailUser" type="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Correo" name="email" value="{{ old('email') }}" required
                                autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="Contraceña"
                                name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <input id="password-confirm" type="password" class="form-control"
                                placeholder="Confirmar Contraceña" name="password_confirmation" required
                                autocomplete="new-password">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block" id="saveBtn">
                    </button>
                    <hr>

                </form>
            </div>

        </div>

    </div>

</div>
