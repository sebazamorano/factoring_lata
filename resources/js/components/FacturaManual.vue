<template>
    <div class="row">
        <div class="col-lg-1">
            <button v-if="$parent.facturas.length > 1" @click="$emit('remove')" type="button" class="btn btn-danger btn-sm mt-6 btnDelete">
                <i class="fas fa-trash-alt"></i>
            </button>
        </div>
        <div class="col-lg-2">
            <ValidationProvider rules="required|rut" vid="rut" v-slot="{ errors, classes }">
            <div class="form-group" :class="(errors.length)?'has-danger':''">
                <label class="form-control-label" for="input-rut-emisor">Rut Emisor</label>
                <input name="rut" type="text" v-rut:live v-model="factura.rut_emisor" id="input-rut-emisor" class="form-control form-control-alternative" placeholder="Rut Emisor" required>
                <small class="form-text text-muted text-red">{{ errors.toString() }}</small>
            </div>
            </ValidationProvider>
        </div>
        <div class="col-lg-2">
            <ValidationProvider rules="required|rut" vid="Rut" v-slot="{ errors, classes }">
            <div class="form-group" :class="(errors.length)?'has-danger':''">
                <label class="form-control-label" for="input-rut-receptor">Rut Receptor</label>
                <input name="Rut" type="text" v-rut:live v-model="factura.rut_receptor" id="input-rut-receptor" class="form-control form-control-alternative" placeholder="Rut Receptor">
                <small class="form-text text-muted text-red">{{ errors.toString() }}</small>
            </div>
            </ValidationProvider>
        </div>
        <div class="col-lg-2">
            <ValidationProvider rules="required" vid="monto" v-slot="{ errors, classes }">
            <div class="form-group" :class="(errors.length)?'has-danger':''">
                <label class="form-control-label" for="monto_factura">Monto Factura</label>
                <input name="monto_factura" type="number" v-model.number="factura.monto_factura" id="monto_factura"
                       class="form-control form-control-alternative" placeholder="13.000.444">
                <small class="form-text text-muted text-red">{{ errors.toString() }}</small>
            </div>
            </ValidationProvider>
        </div>
        <div class="col-lg-2">
            <ValidationProvider rules="required" vid="folio" v-slot="{ errors, classes }">
            <div class="form-group" :class="(errors.length)?'has-danger':''">
                <label class="form-control-label" for="input-folio">Folio</label>
                <input name="folio" type="text" v-model="factura.folio" id="input-folio" class="form-control form-control-alternative" placeholder="Folio">
                <small class="form-text text-muted text-red">{{ errors.toString() }}</small>
            </div>
            </ValidationProvider>
        </div>
        <div class="col-lg-3">
            <ValidationProvider rules="required" vid="fecha" v-slot="{ errors, classes }">
            <div class="form-group">
                <label class="form-control-label" for="input-fecha">Fecha Vencimiento</label>
                <input name="fecha" class="form-control" id="input-fecha" v-model="factura.fecha" placeholder="Fecha de vencimiento" type="date">
            </div>
            </ValidationProvider>
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
