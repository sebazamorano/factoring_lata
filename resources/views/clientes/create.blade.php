@extends('layouts.app')



@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 200px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->

    </div>
    <div class="container-fluid mt--7" id="nuevo-cliente">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Nuevo empresa</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <h6 class="heading-small text-muted mb-4">Información Usuario</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Nombre Usuario</label>
                                            <input name="apodo" value="{{ old('apodo') }}" type="text" id="input-username" class="form-control form-control-alternative" placeholder="Nombre Usuario">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Dirección Email</label>
                                            <input name="email" value="{{ old('email') }}" type="email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Nombre</label>
                                            <input name="nombre" value="{{ old('Nombre') }}" type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-last-name">Apellido</label>
                                            <input name="apellido" value="{{ old('apellido') }}" type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Apellido">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-last-name">Enlazar Ejecutivo</label>
                                            <select class="form-control form-control-alternative">
                                                <option value="Juan">Juan</option>
                                                <option value="Jose">Jose</option>
                                                <option value="Alfredo">Alfredo</option>
                                                <option value="Miguel">Miguel</option>
                                                <option value="Pedro">Pedro</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <!-- Address -->
                            <h6 class="heading-small text-muted mb-4">Información de contacto @{{ message }}</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-address">Dirección</label>
                                            <input name="direccion" value="{{ old('direccion') }}" id="input-address" class="form-control form-control-alternative" placeholder="Dirección" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-city">Ciudad</label>
                                            <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="Ciudad">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-country">Pais</label>
                                            <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Pais">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-country">Código postal</label>
                                            <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Código postal">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <!-- Description -->
                            <h6 class="heading-small text-muted mb-4">Acerca de mi</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label>Acerca de mi</label>
                                    <textarea rows="4" class="form-control form-control-alternative" placeholder="Algunas palabras acerca de ti..."></textarea>
                                </div>
                            </div>
                        </form>
                        <p class="mt-4 mb-4 text-muted">
                        </p><div class="col text-center">
                            <a href="#!" class="btn btn-success">Agregar nueva empresa</a>
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
