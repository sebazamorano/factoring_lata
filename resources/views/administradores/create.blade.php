@extends('layouts.app')



@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 200px; background-image: url({{asset('img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-purple opacity-8"></span>
        <!-- Header container -->

    </div>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Nuevo Administrador</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('administradores.store') }}" method="post">
                           @csrf
                            <h6 class="heading-small text-muted mb-4">Información Administrador</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group @error('nombre') has-danger @enderror">
                                            <label class="form-control-label" for="input-first-name">Nombre</label>
                                            <input name="nombre" value="{{ old('nombre') }}" type="text" id="input-first-name" class="form-control form-control-alternative @error('nombre') is-invalid @enderror" placeholder="Nombre" >

                                            @error('nombre')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group @error('apellido') has-danger @enderror">
                                            <label class="form-control-label" for="input-email">Apellido</label>
                                            <input name="rut" value="{{ old('apellido') }}" type="text" id="input-email" class="form-control form-control-alternative @error('apellido') is-invalid @enderror" placeholder="Apellido" >
                                            @error('rut')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group @error('apellido') has-danger @enderror">
                                            <label class="form-control-label" for="input-first-name">Sexo: </label>
                                            <div class="custom-control custom-radio mb-3">
                                                <input name="sexo" class="custom-control-input @error('sexo') is-invalid @enderror" value="f" id="femeninoRadio" type="radio" @error('sexo') @enderror>
                                                <label class="custom-control-label" for="femeninoRadio">Femenino</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input name="sexo" class="custom-control-input @error('sexo') is-invalid @enderror" value="m" id="masculinoRadio" type="radio">
                                                <label class="custom-control-label" for="masculinoRadio">Masculino</label>
                                            </div>
                                            @error('sexo')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group @error('email') has-danger @enderror">
                                            <label class="form-control-label" for="input-email">Dirección Email</label>
                                            <input name="email" value="{{ old('email') }}" type="email" id="input-email" class="form-control form-control-alternative @error('email') is-invalid @enderror" placeholder="jesse@example.com" >
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group @error('apellido') has-danger @enderror">
                                            <label class="form-control-label" for="input-last-name">Apellido</label>
                                            <input name="apellido" value="{{ old('apellido') }}" type="text" id="input-last-name" class="form-control form-control-alternative @error('email') is-invalid @enderror" placeholder="Apellido" >
                                            @error('apellido')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group @error('direccion') has-danger @enderror">
                                            <label class="form-control-label" for="input-direccion">Dirección</label>
                                            <input name="direccion" value="{{ old('direccion') }}" type="text" id="input-direccion" class="form-control form-control-alternative @error('direccion') is-invalid @enderror" placeholder="Direccion">

                                            @error('direccion')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group @error('password') has-danger @enderror">
                                            <label class="form-control-label" for="input-contaseña">Contraseña</label>
                                            <input name="password" type="password" class="form-control form-control-alternative @error('password') is-invalid @enderror" placeholder="Contraseña">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group @error('password') has-danger @enderror">
                                            <label class="form-control-label" for="input-contaseña">Confirmar Contraseña</label>
                                            <input name="password_confirmation" type="password" class="form-control form-control-alternative" placeholder="Contraseña">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <p class="mt-4 mb-4 text-muted">
                            </p><div class="col text-center">
                                <button type="submit" class="btn btn-success">Crear Administrador</button>
                            </div>
                            <p></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
