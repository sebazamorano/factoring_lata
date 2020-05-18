@extends('layouts.app')

@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 200px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-green opacity-8"></span>
        <!-- Header container -->

    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-11">
                                <h3 class="mb-0">Listado de Ejecutivos</h3>
                            </div>
                            <div class="col-1">
                                <a href="../examples/crear-ejecutivo.html" class="btn btn-sm btn-success"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <!-- Projects table -->
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Rut</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        Juan
                                    </th>
                                    <td>
                                        11123234-k
                                    </td>
                                    <td>
                                        juanito@gmail.com
                                    </td>
                                    <td>
                                        <a href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        <a href="../examples/modificar-ejecutivo.html" class="btn btn-sm btn-dark"><i class="fas fa-pen-alt"></i></a>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fas fa-eye"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" style="max-width: 90%;" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detalles Ejecutivo</h5>
                                                        <button type="button" class="Cerrar" data-dismiss="modal" aria-label="Cerrar">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <!-- Contenido modal -->
                                                        <div class="table-responsive">
                                                            <!-- Projects table -->
                                                            <table class="table align-items-center table-flush">
                                                                <thead class="thead-light">
                                                                <tr>
                                                                    <th scope="col">Nombre Completo</th>
                                                                    <th scope="col">Rut</th>
                                                                    <th scope="col">Email</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td>
                                                                        Juanito Perez
                                                                    </td>
                                                                    <td>
                                                                        11123234-k
                                                                    </td>
                                                                    <td>
                                                                        juanito@gmail.com
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>

                                                            <div>

                                                            </div>
                                                        </div>
                                                        <!-- Fin contenido modal -->

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                        <button type="button" class="btn btn-primary">Guardar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fin modal -->
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Jose
                                    </th>
                                    <td>
                                        12323454-4
                                    </td>
                                    <td>
                                        jose@gmail.com
                                    </td>
                                    <td>
                                        <a href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        <!-- Button trigger modal -->
                                        <a href="../examples/modificar-ejecutivo.html" class="btn btn-sm btn-dark"><i class="fas fa-pen-alt"></i></a>
                                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fas fa-eye"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" style="max-width: 90%;" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detalles Ejecutivo</h5>
                                                        <button type="button" class="Cerrar" data-dismiss="modal" aria-label="Cerrar">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <!-- Contenido modal -->
                                                        <div class="table-responsive">
                                                            <!-- Projects table -->

                                                        </div>
                                                        <!-- Fin contenido modal -->

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                        <button type="button" class="btn btn-primary">Guardar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fin modal -->
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Alfredo
                                    </th>
                                    <td>
                                        14456654-6
                                    </td>
                                    <td>
                                        ahfedofofavo@gmail.com
                                    </td>
                                    <td>
                                        <a href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        <!-- Button trigger modal -->
                                        <a href="../examples/modificar-ejecutivo.html" class="btn btn-sm btn-dark"><i class="fas fa-pen-alt"></i></a>
                                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fas fa-eye"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" style="max-width: 90%;" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detalles Ejecutivo</h5>
                                                        <button type="button" class="Cerrar" data-dismiss="modal" aria-label="Cerrar">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <!-- Contenido modal -->
                                                        <div class="table-responsive">
                                                            <!-- Projects table -->

                                                        </div>
                                                        <!-- Fin contenido modal -->

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                        <button type="button" class="btn btn-primary">Guardar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fin modal -->
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Miguel
                                    </th>
                                    <td>
                                        15678654-5
                                    </td>
                                    <td>
                                        miguel@gmail.com
                                    </td>
                                    <td>
                                        <a href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        <!-- Button trigger modal -->
                                        <a href="../examples/modificar-ejecutivo.html" class="btn btn-sm btn-dark"><i class="fas fa-pen-alt"></i></a>
                                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fas fa-eye"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" style="max-width: 90%;" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detalles Ejecutivo</h5>
                                                        <button type="button" class="Cerrar" data-dismiss="modal" aria-label="Cerrar">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <!-- Contenido modal -->
                                                        <div class="table-responsive">
                                                            <!-- Projects table -->

                                                        </div>
                                                        <!-- Fin contenido modal -->

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                        <button type="button" class="btn btn-primary">Guardar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fin modal -->
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Pedro
                                    </th>
                                    <td>
                                        15678987-8
                                    </td>
                                    <td>
                                        pedrito@gmail.com
                                    </td>
                                    <td>
                                        <a href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>

                                        <!-- Button trigger modal -->
                                        <a href="../examples/modificar-ejecutivo.html" class="btn btn-sm btn-dark"><i class="fas fa-pen-alt"></i></a>
                                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fas fa-eye"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" style="max-width: 90%;" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detalles Ejecutivo</h5>
                                                        <button type="button" class="Cerrar" data-dismiss="modal" aria-label="Cerrar">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <!-- Contenido modal -->
                                                        <div class="table-responsive">
                                                            <!-- Projects table -->

                                                        </div>
                                                        <!-- Fin contenido modal -->

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                        <button type="button" class="btn btn-primary">Guardar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fin modal -->
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
