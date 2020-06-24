<template>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-11">
                                <h3 class="mb-0">Listado de empresas</h3>
                            </div>
                            <div class="col-1">
                                <a href="clientes/create" class="btn btn-sm btn-success"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <!-- Projects table -->
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Nombre Empresa</th>
                                    <th scope="col">Rut</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Ejecutivo</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">

                                    </th>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td style="color: red;">
                                        No tiene ejecutivo enlazado
                                    </td>
                                    <td>
                                        <a href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        <a href="../examples/modificar-usuarios.html" class="btn btn-sm btn-dark"><i class="fas fa-pen-alt"></i></a>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fas fa-eye"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" style="max-width: 90%;" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Detalles Cliente</h5>
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
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Index"
    }
</script>