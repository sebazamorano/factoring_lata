@extends('layouts.app')

@section('css')
    <style>
        input[type="file"] {
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"style="min-height: 200px; background-image: url({{ asset('img/theme/profile-cover.jpg') }}); background-size: cover; background-position: center top;" >
        <span class="mask bg-gradient-purple opacity-8"></span>
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-xl-12 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Bienvenido a Factoring</h5>
                                        <span class="p font-weight-normal mb-0"><strong>Lata Digital Spa</strong>, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <!-- <span class="text-nowrap">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span> -->
                                <div class="text-left">
                                    <a href="./examples/cotiza.html" class="btn btn-sm btn-outline-primary">Comienza a anticipar tus facturas</a>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <!-- Inicio Tablas Sincronizar -->
        <div class="row">
            <div class="col-xl-12 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Certificados Digitales</h5>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!-- Projects table -->
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Identificador</th>
                                    <th scope="col">Rut Autorizado</th>
                                    <th scope="col">Nombre Autorizado</th>
                                    <th scope="col">Contraseña Guardada</th>
                                    <th scope="col">Información de Certificado</th>
                                    <th scope="col">Fecha Vencimiento</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        Javier Sepulveda - 123456789-0 - 2018-12-05
                                    </th>
                                    <td>
                                        123456789-0
                                    </td>
                                    <td>
                                        Javier Sepulveda
                                    </td>
                                    <td>
                                        <button href="#!" class="btn btn-sm btn-light" disabled>Si</button>
                                    </td>
                                    <td>
                                        -
                                    </td>
                                    <td>
                                        -
                                    </td>
                                    <td>
                                        <a href="#!" class="btn btn-sm btn-outline-warning">Editar</a>
                                        <a href="#!" class="btn btn-sm btn-outline-danger">Eliminar</a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <p class="mt-3 mb-0 text-muted text-sm">
                        <div class="text-right">
                            <!-- <a href="#!" class="btn btn-outline-primary">Agregar Certificado</a> -->

                            <label for="file-upload" class="btn btn-outline-primary">
                                <i class="fa fa-cloud-upload"></i> Agregar Certificado
                            </label>
                            <input id="file-upload" type="file"/>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <hr>

        <div class="row">
            <div class="col-xl-12 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Configurador de sincronización</h5>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!-- Projects table -->
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Facturador</th>
                                    <th scope="col">Rut Empresa</th>
                                    <th scope="col">Rut Personal SII</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        MiPyme
                                    </th>
                                    <td>
                                        76345456-3
                                    </td>
                                    <td>
                                        123456789-0
                                    </td>
                                    <td>
                                        <a href="#!" class="btn btn-sm btn-outline-warning">Editar</a>
                                        <a href="#!" class="btn btn-sm btn-outline-danger">Eliminar</a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <p class="mt-3 mb-0 text-muted text-sm">
                        <div class="text-right">
                            <!-- <a href="#!" class="btn btn-outline-warning">Agregar Sincronización</a> -->
                            <label for="file-upload" class="btn btn-outline-warning">
                                <i class="fa fa-cloud-upload"></i> Agregar Sincronización
                            </label>
                            <input id="file-upload" type="file"/>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-xl-12 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Sincronizar CTE desde SII</h5>
                            </div>
                        </div>
                        <br>
                        <div class="alert alert-info" role="alert">
                            <span class="alert-inner--text">No hay sincronizaciones cargadas.</span>
                        </div>

                        <p class="mt-3 mb-0 text-muted text-sm">
                        <div class="text-right">
                            <!-- <a href="#!" class="btn btn-outline-info">Agregar Sincronización</a> -->

                            <label for="file-upload" class="btn btn-outline-info">
                                <i class="fa fa-cloud-upload"></i> Agregar Sincronización
                            </label>
                            <input id="file-upload" type="file"/>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fin Tablas Sincronizar -->


        <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Page visits</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Page name</th>
                                <th scope="col">Visitors</th>
                                <th scope="col">Unique users</th>
                                <th scope="col">Bounce rate</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">
                                    /argon/
                                </th>
                                <td>
                                    4,569
                                </td>
                                <td>
                                    340
                                </td>
                                <td>
                                    <i class="fas fa-arrow-up text-success mr-3"></i> 46,53%
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    /argon/index.html
                                </th>
                                <td>
                                    3,985
                                </td>
                                <td>
                                    319
                                </td>
                                <td>
                                    <i class="fas fa-arrow-down text-warning mr-3"></i> 46,53%
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    /argon/charts.html
                                </th>
                                <td>
                                    3,513
                                </td>
                                <td>
                                    294
                                </td>
                                <td>
                                    <i class="fas fa-arrow-down text-warning mr-3"></i> 36,49%
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    /argon/tables.html
                                </th>
                                <td>
                                    2,050
                                </td>
                                <td>
                                    147
                                </td>
                                <td>
                                    <i class="fas fa-arrow-up text-success mr-3"></i> 50,87%
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    /argon/profile.html
                                </th>
                                <td>
                                    1,795
                                </td>
                                <td>
                                    190
                                </td>
                                <td>
                                    <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Social traffic</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">See all</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Referral</th>
                                <th scope="col">Visitors</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">
                                    Facebook
                                </th>
                                <td>
                                    1,480
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2">60%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    Facebook
                                </th>
                                <td>
                                    5,480
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2">70%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    Google
                                </th>
                                <td>
                                    4,807
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2">80%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    Instagram
                                </th>
                                <td>
                                    3,678
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2">75%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    twitter
                                </th>
                                <td>
                                    2,645
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2">30%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
