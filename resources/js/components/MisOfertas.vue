<template>
    <div>
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 200px; background-image: url(img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">

        <span class="mask bg-gradient-purple opacity-8"></span>

        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <!-- Alertas -->
                <!-- <div class="alert alert-success" role="alert">
                    <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-inner--text">Sincronización exitosa y ejecución en curso. El proceso podría tardar unos minutos, favor espera mientras se sincronizan los documentos</span>
                </div>
                <div class="alert alert-success" role="alert">
                    <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-inner--text">Sincronización exitosa, se han cargado los documentos emitidos en los ultimos 30 días.</span>
                </div> -->
                <!-- Fin Alertas -->
                <div class="row">
                    <div class="col-xl-12 ">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Nueva operación</h5>
                                        <br>
                                        <div class="container">
                                            <div class="row" style="text-align: center;">
                                                <div class="col-sm bordeLeft cardOperacion">
                                                    <h3 class="textStats">{{ num_docs.length }}</h3>
                                                    <span>Documento</span>
                                                </div>
                                                <div class="col-sm cardOperacion">
                                                    <h3 class="textStats">{{ total_facturas | moneyFormat }}</h3>
                                                    <span>Monto Factura</span>
                                                </div>
                                                <div class="col-sm bordeRight cardOperacion">
                                                    <h3 class="textStats">{{ giros | moneyFormat }}</h3>
                                                    <span>Giro a Recibir</span>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <!-- <div class="col-auto" style="display: inline-block;">
                                        <div class="icon icon-shape text-white rounded-circle shadow">
                                            <h4>asd</h4>
                                        </div>
                                    </div> -->
                                </p><div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-outline-primary">Vencimiento</a>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                                    Detalles
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" style="max-width: 90%;" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                                            <th scope="col"></th>
                                                            <th scope="col">Fecha Emisión</th>
                                                            <th scope="col">Receptor</th>
                                                            <th scope="col">Rut</th>
                                                            <th scope="col">Folio</th>
                                                            <th scope="col">Fecha Vencimiento</th>
                                                            <th scope="col">Monto</th>
                                                            <th scope="col">Total Descuentos</th>
                                                            <th scope="col">Giro a recibir</th>
                                                            <th scope="col">Excedentes</th>
                                                            <th scope="col">Estado</th>
                                                            <th scope="col">Acciones</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">
                                                                <input type="checkbox">
                                                            </th>
                                                            <td>
                                                                28-11-2019
                                                            </td>
                                                            <td>
                                                                LATADIGITAL
                                                            </td>
                                                            <td>
                                                                17238493-4
                                                            </td>
                                                            <td>
                                                                93
                                                            </td>
                                                            <td>
                                                                28-11-2019
                                                            </td>
                                                            <td>
                                                                $33.001
                                                            </td>
                                                            <td>
                                                                $40.001
                                                            </td>
                                                            <td>
                                                                $40.001
                                                            </td>
                                                            <td>
                                                                $40.001
                                                            </td>
                                                            <td>
                                                                <a href="#!" class="btn btn-sm btn-success">Oferta Disponible</a>
                                                            </td>
                                                            <td>
                                                                <!-- <a href="#!" class="btn btn-sm btn-info">Detalle</a> -->
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                                                                    Detalles
                                                                </button>

                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">×</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                ...
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#!" class="btn btn-sm btn-primary">Anticipar</a>
                                                                <a href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr><th scope="row">
                                                            <input type="checkbox">
                                                        </th>
                                                            <td>
                                                                28-10-2019
                                                            </td>
                                                            <td>
                                                                LATADIGITAL
                                                            </td>
                                                            <td>
                                                                15892334-k
                                                            </td>
                                                            <td>
                                                                91
                                                            </td>
                                                            <td>
                                                                28-10-2019
                                                            </td>
                                                            <td>
                                                                $33.001
                                                            </td>
                                                            <td>
                                                                $35.001
                                                            </td>
                                                            <td>
                                                                $35.001
                                                            </td>
                                                            <td>
                                                                $35.001
                                                            </td>
                                                            <td>
                                                                <a href="#" class="btn btn-sm btn-secondary">Sin Oferta</a>
                                                            </td>
                                                            <td>
                                                                <!-- <a href="#!" class="btn btn-sm btn-info">Detalle</a> -->
                                                                <!-- Button trigger modal -->
                                                                <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                                                                    Detalles
                                                                </button>

                                                                <!-- Modal -->
                                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Detalles de Oferta</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">×</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                ...
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a href="#!" class="btn btn-sm btn-facebook">Anticipar</a>
                                                                <a href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- Fin contenido modal -->

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a href="#!" class="btn btn-sm btn-primary">Anticipar</a>
                                <a href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-4 col-lg-10 centeredBox">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Subir mis facturas</h5>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="fas fa-chart-bar"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <div class="col text-right" >
                                        <a href="#!" class="btn btn-sm btn-primary">Seleccinar tus DTEs</a>
                                        <a href="#!" class="btn btn-sm btn-secondary">Sincronizar DTEs</a>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Facturas Sincronizadas</h3>
                                <p style="font-size: 13px;">(Última Sincronización 28-12-2019 a las 09:30 hrs)</p>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-danger">Selecciona DTE'S</a>
                                <a href="#!" class="btn btn-sm btn-primary">Sincronizar DTE'S</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Fecha Emisión</th>
                                <th scope="col">Receptor</th>
                                <th scope="col">Rut</th>
                                <th scope="col">Folio</th>
                                <th scope="col">Fecha Vencimiento</th>
                                <th scope="col">Monto</th>
                                <th scope="col">No Financiado</th>
                                <th scope="col">Monto Financiado</th>
                                <th scope="col">Excedentes</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="f in facturas">
                                <th scope="row">
                                    <input type="checkbox" :value="{id:f.id, total: f.monto_total, giros: f.total_descuento}" v-model="num_docs">
                                </th>
                                <td>
                                    {{ f.fecha_emision | dateFormat }}
                                </td>
                                <td>
                                    {{ f.receptor.razon_social }}
                                </td>
                                <td>
                                    {{ f.receptor.rut }}
                                </td>
                                <td>
                                    {{ f.folio }}
                                </td>
                                <td>
                                    {{ f.fecha_vencimiento | dateFormat }}
                                </td>
                                <td>
                                    {{ f.monto_total | moneyFormat }}
                                </td>
                                <td>
                                    {{ f.no_financiado | moneyFormat }}
                                </td>
                                <td>
                                    {{ f.total_descuento | moneyFormat }}
                                </td>
                                <td>
                                    $40.001
                                </td>
                                <td>
                                    <a href="#!" class="btn btn-sm btn-success">Oferta Disponible</a>
                                </td>
                                <td>
                                    <!-- <a href="#!" class="btn btn-sm btn-info">Detalle</a> -->
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                                        Detalles
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" style="max-width: 90%;" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                                                <th scope="col"></th>
                                                                <th scope="col">Fecha Emisión</th>
                                                                <th scope="col">Receptor</th>
                                                                <th scope="col">Rut</th>
                                                                <th scope="col">Folio</th>
                                                                <th scope="col">Fecha Vencimiento</th>
                                                                <th scope="col">Monto</th>
                                                                <th scope="col">Total Descuentos</th>
                                                                <th scope="col">Giro a recibir</th>
                                                                <th scope="col">Excedentes</th>
                                                                <th scope="col">Estado</th>
                                                                <th scope="col">Acciones</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <th scope="row">
                                                                    <input type="checkbox">
                                                                </th>
                                                                <td>
                                                                    28-11-2019
                                                                </td>
                                                                <td>
                                                                    LATADIGITAL
                                                                </td>
                                                                <td>
                                                                    17238493-4
                                                                </td>
                                                                <td>
                                                                    93
                                                                </td>
                                                                <td>
                                                                    28-11-2019
                                                                </td>
                                                                <td>
                                                                    $33.001
                                                                </td>
                                                                <td>
                                                                    $40.001
                                                                </td>
                                                                <td>
                                                                    $40.001
                                                                </td>
                                                                <td>
                                                                    $40.001
                                                                </td>
                                                                <td>
                                                                    <a href="#!" class="btn btn-sm btn-success">Oferta Disponible</a>
                                                                </td>
                                                                <td>
                                                                    <!-- <a href="#!" class="btn btn-sm btn-info">Detalle</a> -->
                                                                    <!-- Button trigger modal -->
                                                                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                                                                        Detalles
                                                                    </button>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    ...
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#!" class="btn btn-sm btn-primary">Anticipar</a>
                                                                    <a href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                                </td>
                                                            </tr>
                                                            <tr><th scope="row">
                                                                <input type="checkbox">
                                                            </th>
                                                                <td>
                                                                    28-10-2019
                                                                </td>
                                                                <td>
                                                                    LATADIGITAL
                                                                </td>
                                                                <td>
                                                                    15892334-k
                                                                </td>
                                                                <td>
                                                                    91
                                                                </td>
                                                                <td>
                                                                    28-10-2019
                                                                </td>
                                                                <td>
                                                                    $33.001
                                                                </td>
                                                                <td>
                                                                    $35.001
                                                                </td>
                                                                <td>
                                                                    $35.001
                                                                </td>
                                                                <td>
                                                                    $35.001
                                                                </td>
                                                                <td>
                                                                    <a href="#" class="btn btn-sm btn-secondary">Sin Oferta</a>
                                                                </td>
                                                                <td>
                                                                    <!-- <a href="#!" class="btn btn-sm btn-info">Detalle</a> -->
                                                                    <!-- Button trigger modal -->
                                                                    <button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                                                                        Detalles
                                                                    </button>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title" id="exampleModalLabel">Detalles de Oferta</h5>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">×</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    ...
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <a href="#!" class="btn btn-sm btn-primary">Anticipar</a>
                                                                    <a href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Fin contenido modal -->

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#!" class="btn btn-sm btn-primary">Anticipar</a>
                                    <a href="#!" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
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
        props: ['conf'],

        data () {
            return {
                facturas: null,
                num_docs: [],
                total_facturas: 0,
                giros: 0,
            }
        },

        mounted () {
            this.getFacturas();
        },

        methods: {
            getFacturas () {
                axios.get('/api/facturas')
                    .then((response) => {
                        this.facturas = response.data;
                        for (let f of this.facturas) {
                            f['total_descuento'] = f.monto_total * this.conf.porc_anticipo;
                            f['no_financiado'] = f['monto_total'] - f['total_descuento'];
                            f['pago_mensual'] = (this.conf.porc_interes / 30) * f['no_financiado'] * 58;
                            f['gasto_notificacion'] = this.conf.notificacion_facturas;
                            f['gastos_fijos'] = this.conf.gasto_operacion;

                        }
                    });
            }
        },

        watch: {
            num_docs (value) {
                this.total_facturas = _.sumBy(value, 'total');
                this.giros = _.sumBy(value, 'giros');
            }
        },

        computed: {
        }
    }
</script>

<style scoped>
    .textStats{
        font-weight: 200;
        font-size: 30px;
    }

    .bordeRight{
        border-top-right-radius: 9px 20px;
        border-bottom-right-radius: 9px 20px;
    }
    .bordeLeft{
        border-top-left-radius: 9px 20px;
        border-bottom-left-radius: 9px 20px;
    }
    .cardOperacion{
        background: #f7f7f7;
        padding: 20px;
    }
    .centeredBox{
        margin: 0 auto;
        margin-top: 2%;
    }
    .borderNone{
        border: 0;
    }
</style>