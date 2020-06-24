<template>
    <div class="card-body px-lg-5 py-lg-3">
        <h2>Agrega tus facturas</h2>
        <p class="pForm">Agrega todos los .XML que quieras cotizar...</p>
        <input @change="onFileChange" class="buttonForm btn btn-sm btn-outline-info" type="file" value="Seleccionar tus DTEs">
        <p class="pForm">...o ingresa más datos manualmente</p>
        <form role="form">
            <div class="pl-lg-0">
                <factura-manual
                    v-for="(factura, index) in facturas"
                    :factura="factura"
                    :key="index"
                    @remove="facturas.splice(index, 1)"></factura-manual>

                <div class="text-right">
                    <button type="button" class="btn btn-primary mt-4" @click="addFactura">+</button>
                    <!-- <button type="button" class="btn btn-danger mt-4"><i class="fas fa-trash-alt"></i></button> -->
                </div>

                <div class="text-center">
                    <button type="button" class="btn btn-info mt-4" disabled="">Anterior</button>
                    <button type="button" class="btn btn-info mt-4" @click="enviar">Siguiente</button>
                </div>

            </div>
        </form>
    </div>
</template>

<script>
    import FacturaManual from "./FacturaManual";

    export default {

        data () {
            return {
                facturas: [
                    {
                        rut_emisor: '',
                        rut_receptor: '',
                        monto_factura: 0,
                        folio: 0,
                        fecha: '2020-02-01'
                    }
                ],
                form: new FormData(),
                templateFact: {
                    rut_emisor: '',
                    rut_receptor: '',
                    monto_factura: 0,
                    folio: 0,
                    fecha: '2020-02-01'
                }
            }
        },

        methods:{
            addFactura () {
                this.facturas.push(this.templateFact);
            },

            enviar () {
                const json = JSON.stringify(this.facturas);
                const blob = new Blob([json], {
                    type: 'application/json'
                });
                this.form.append('facturas', blob);

                axios.post('/api/facturas', this.form, {
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'multipart/form-data'
                    }
                });
            },

            onFileChange: function (e) {
                this.error = false;
                this.files = e.target.files || e.dataTransfer.files;
                if (!this.files.length)
                    return;

                this.form.append('documento', this.files[0]);
            },
        } ,

        components: {
            FacturaManual
        }
    }
</script>

