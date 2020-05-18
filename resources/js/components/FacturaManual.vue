<template>
    <div class="row">
        <button v-if="$parent.facturas.length > 1" @click="$emit('remove')" type="button" class="btn btn-danger btn-sm mt-6 btnDelete">
            <i class="fas fa-trash-alt"></i>
        </button>
        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-rut-emisor">Rut Emisor</label>
                <input type="text" v-model="factura.rut_emisor" id="input-rut-emisor" class="form-control form-control-alternative" placeholder="Rut Emisor" required>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-control-label" for="input-rut-receptor">Rut Receptor</label>
                <input type="text" v-model="factura.rut_receptor" id="input-rut-receptor" class="form-control form-control-alternative" placeholder="jesse@example.com">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-monto">Monto Factura</label>
                <input type="number" v-model="factura.monto" id="input-monto" class="form-control form-control-alternative" placeholder="Monto">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-folio">Folio</label>
                <input type="text" v-model="factura.folio" id="input-folio" class="form-control form-control-alternative" placeholder="Folio">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <label class="form-control-label" for="input-fecha">Fecha</label>
                <input class="form-control" id="input-fecha" v-model="factura.fecha" placeholder="Fecha de vencimiento" type="date">
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'factura'
        ],

        methods: {

        }
    }
</script>
