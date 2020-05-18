@extends('layouts.app')



@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 200px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->

    </div>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Modificar Administrador</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <h6 class="heading-small text-muted mb-4">Información Admin</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-first-name">Nombre</label>
                                            <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Nombre" value="juanito">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-email">Dirección Email</label>
                                            <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com" value="juanito@gmail.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-last-name">Apellido</label>
                                            <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Apellido" value="perez">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-direccion">Dirección</label>
                                            <input type="text" id="input-direccion" class="form-control form-control-alternative" placeholder="Direccion" value="Avenida siempre viva">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-contraseña">Contraseña</label>
                                            <input type="password" id="input-contraseña" class="form-control form-control-alternative" placeholder="contraseña" value="1qa,.2ws,.3ed,.">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4">
                        </form>
                        <p class="mt-4 mb-4 text-muted">
                        </p><div class="col text-center">
                            <a href="#!" class="btn btn-success">Modificar Administrador</a>
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>



        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        © 2018 <a href="https://www.latadigital.cl" class="font-weight-bold ml-1" target="_blank">Latadigital</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="https://www.latadigital.cl" class="nav-link" target="_blank">Latadigital</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.latadigital.cl/presentation" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.latadigital.cl" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
@endsection
