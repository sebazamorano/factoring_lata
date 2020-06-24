<template>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Nuevo Factory</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ValidationObserver ref="observer" v-slot="{ passes }">
                            <form method="post" @submit.prevent="passes(onSubmit)">
                                <h6 class="heading-small text-muted mb-4">Información Factory</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ValidationProvider rules="required" vid="nombre" v-slot="{ errors, classes }">
                                                <div class="form-group" :class="(errors.length)?'has-danger':''">
                                                    <label class="form-control-label" for="input-nombre">Nombre</label>
                                                    <input name="nombre" v-model="factory.nombre" id="input-nombre" type="text" class="form-control form-control-alternative" :class="(errors.length)?'is-invalid':''" placeholder="Nombre" >
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ errors.toString() }}</strong>
                                                    </span>
                                                </div>
                                            </ValidationProvider>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ValidationProvider rules="required" vid="direccion" v-slot="{ errors, classes }">
                                                <div class="form-group" :class="(errors.length)?'has-danger':''">
                                                    <label class="form-control-label">Dirección</label>
                                                    <input name="direccion" v-model="factory.direccion" type="text" class="form-control form-control-alternative" :class="(errors.length)?'is-invalid':''" placeholder="Dirección" >
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ errors.toString() }}</strong>
                                                </span>
                                                </div>
                                            </ValidationProvider>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ValidationProvider rules="required" vid="region" v-slot="{ errors, classes }">
                                                <div class="form-group" :class="(errors.length)?'has-danger':''">
                                                    <label class="form-control-label" for="region">Región</label>
                                                    <select name="region" id="region" v-model="region_id" class="form-control form-control-alternative" :class="(errors.length)?'is-invalid':''">
                                                        <option value="">Selecciona una región ...</option>
                                                        <option v-for="r in regiones" :value="r.id"> {{ r.nombre }} </option>
                                                    </select>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ errors.toString() }}</strong>
                                            </span>
                                                </div>
                                            </ValidationProvider>
                                        </div>
                                        <div class="col-lg-6">
                                            <ValidationProvider rules="required" vid="comuna" v-slot="{ errors, classes }">
                                                <div class="form-group" :class="(errors.length)?'has-danger':''">
                                                    <label class="form-control-label" for="comuna">Comuna</label>
                                                    <select name="comuna" id="comuna" v-model="factory.ciudad_id" class="form-control form-control-alternative" :class="(errors.length)?'is-invalid':''">
                                                        <option value="">Selecciona una ciudad ...</option>
                                                        <option v-for="c in comunas" :value="c.id">{{ c.comuna }}</option>
                                                    </select>
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ errors.toString() }}</strong>
                                            </span>
                                                </div>
                                            </ValidationProvider>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <p class="mt-4 mb-4 text-muted">
                                </p><div class="col text-center">
                                <button type="submit" class="btn btn-success">Crear Factory</button>
                            </div>
                            </form>
                        </ValidationObserver>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['regiones'],


        data() {
            return {
                factory: {
                    nombre: '',
                    direccion: '',
                    ciudad_id: '',
                },
                comunas: null,
                region_id: null,
            }
        },

        methods: {
            onSubmit () {
                axios.post('/api/ejecutivos/', this.usuario)
                    .then(() => {
                        Swal.fire({
                            type: 'success',
                            title: 'Se ha creado un nuevo ejecutivo',
                        });

                        window.location = '/ejecutivos';
                    }, (error) => {
                        Swal.fire({
                            type: 'error',
                            title: 'Hay un error al crear recurso'
                        })

                        this.$refs.observer.setErrors(error.response.data.errors);
                    });
            }
        },

        watch: {
            region_id (value) {
                this.comunas = null;
                axios.get('/api/regiones/' + value + '/comunas')
                    .then((response)  => {
                        this.comunas = response.data;
                    });
            }
        }
    }
</script>
