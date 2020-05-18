@extends('layouts.app')


@section('content')

    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url( {{ asset('/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-purple opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="display-2 text-white">Hola Lata Digital</h1>
                    <p class="text-white mt-0 mb-5">Te agradecemos que confies en nosotros para operar tu liquidez con nosotros. En esta página podrás editar tus datos y ponerte en contacto con tu ejecutivo de manera rápida y efectiva. </p>
                    <!-- <a href="#!" class="btn btn-info">Editar Perfil</a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="https://via.placeholder.com/800x800" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-info mr-4">Llámame</a>
                            <a href="#" class="btn btn-sm btn-default float-right">Escríbeme</a>
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <div>
                                        <span class="heading">1.209</span>
                                        <span class="description">Operaciones</span>
                                    </div>
                                    <div>
                                        <span class="heading">39</span>
                                        <span class="description">Cotizaciones</span>
                                    </div>
                                    <div>
                                        <span class="heading">$20USD</span>
                                        <span class="description">Total</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                Latadigital<span class="font-weight-light"></span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>Marketing Digital
                            </div>
                            <!-- <div class="h5 mt-4">
                              <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                            </div> -->
                            <hr class="my-4">
                            <p>Estoy ansioso por acompañarte en tu nueva operación, hagamos crecer tu empresa juntos.</p>
                            <!-- <a href="#">Show more</a> -->



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Mi cuenta</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <h6 class="heading-small text-muted mb-4">Información de usuario</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-username">Nombre Usuario</label>
                                            <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="lucky.jesse">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Email</label>
                                            <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-first-name">Nombre</label>
                                            <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="Lucky">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-last-name">Apellido</label>
                                            <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Jesse">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <!-- Address -->
                            <h6 class="heading-small text-muted mb-4">Información de contacto</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-address">Direccion</label>
                                            <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-city">Ciudad</label>
                                            <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="New York">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-country">Pais</label>
                                            <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="United States">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-country">Código postal</label>
                                            <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <!-- Sicronizacion -->
                            <h6 class="heading-small text-muted mb-4">Modificar Contraseña</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-contraseña">Contraseña</label>
                                            <input id="input-contraseña" class="form-control form-control-alternative" placeholder="Contraseña" value="1qa,.2ws,.3ed,." type="password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col text-center">
                                <a href="#!" class="btn btn-sm btn-outline-primary">Modificar</a>
                            </div>
                            <hr class="my-4">
                        </form>
                        <!-- Sicronizacion -->
                        <h6 class="heading-small text-muted mb-4">Sincronizar Con SII</h6>
                        <!-- <div class="pl-lg-4">
                          <div class="form-group">
                            <label>About Me</label>
                            <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
                          </div>
                        </div> -->
                        <div class="row">
                            <div class="col-xl-15">
                                <div class="card card-stats mb-4 mb-xl-0">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col text-center">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Carpeta Tributaria Electrónica (CTE)</h5>
                                                <span class="h2 font-weight-bolder mb-0">Lata Digital SPA</span>
                                            </div>
                                        </div>
                                        <p class="mt-3 mb-0 text-muted text-sm">
                                        </p><div class="text-center">
                                            <!-- <a href="#!" class="btn btn-outline-primary">Subir CTE</a> -->
                                            <!-- <input class="btn btn-outline-primary" type="file" id="subircte" name="subircte" value="Subir CTE"> -->

                                            <span class="subircte filestyle">
                              <input type="file" class="filestyle" name="subircte">
                            </span>
                                            <label for="subircte">
                                                <span>Subir CTE</span>
                                            </label>

                                            <a href="#!" class="btnSubir">Sincronizar CTE</a>
                                        </div>
                                        <p></p>
                                        <p class="text-center">Selecciona una CTE puntual en formato PDF o sincronizala en forma automática desde el SII.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
