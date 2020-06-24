<template>
    <div class="container-fluid mt--7" id="nuevo-cliente">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Nueva empresa</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ValidationObserver ref="observer" v-slot="{ passes }">
                        <form method="post" @submit.prevent="passes(onSubmit)">
                            <h6 class="heading-small text-muted mb-4">Información Usuario</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ValidationProvider rules="required" vid="apodo" v-slot="{ errors, classes }">
                                        <div class="form-group" :class="(errors.length)?'has-danger':''">
                                            <label class="form-control-label" for="input-username">Nombre Usuario</label>
                                            <input name="apodo" v-model="usuario.apodo" value="" type="text" id="input-username" :class="(errors.length)?'is-invalid':''" class="form-control form-control-alternative" placeholder="Nombre Usuario">
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ errors.toString() }}</strong>
                                            </span>
                                        </div>
                                        </ValidationProvider>
                                    </div>
                                    <div class="col-lg-6">
                                        <ValidationProvider rules="required|email" vid="email" v-slot="{ errors, classes }">
                                            <div class="form-group" :class="(errors.length)?'has-danger':''">
                                                <label class="form-control-label">Email</label>
                                                <input name="email" v-model="usuario.email" type="email" class="form-control form-control-alternative" :class="(errors.length)?'is-invalid':''" placeholder="admin@example.com" >
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ errors.toString()}}</strong>
                                            </span>
                                            </div>
                                        </ValidationProvider>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ValidationProvider rules="required" vid="nombre" v-slot="{ errors, classes }">
                                            <div class="form-group" :class="(errors.length)?'has-danger':''">
                                                <label class="form-control-label" for="input-nombre">Nombre</label>
                                                <input name="nombre" v-model="usuario.nombre" id="input-nombre" type="text" class="form-control form-control-alternative" :class="(errors.length)?'is-invalid':''" placeholder="Nombre" >
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ errors.toString() }}</strong>
                                            </span>
                                            </div>
                                        </ValidationProvider>
                                    </div>
                                    <div class="col-lg-6">
                                        <ValidationProvider rules="required" vid="apellido" v-slot="{ errors, classes }">
                                            <div class="form-group" :class="(errors.length)?'has-danger':''">
                                                <label class="form-control-label" for="input-apellido">Apellido</label>
                                                <input name="apellido" v-model="usuario.apellido" type="text" id="input-apellido"  class="form-control form-control-alternative" :class="(errors.length)?'is-invalid':''" placeholder="Apellido" >
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ errors.toString() }}</strong>
                                                </span>
                                            </div>
                                        </ValidationProvider>
                                    </div>
                                    <div class="col-lg-12">
                                        <ValidationProvider rules="required" vid="ejecutivo" v-slot="{ errors, classes }">
                                        <div class="form-group" :class="(errors.length)?'has-danger':''">
                                            <label class="form-control-label">Enlazar Ejecutivo</label>
                                            <select name="ejecutivo" v-model="usuario.ejecutivo_id" :class="(errors.length)?'is-invalid':''" class="form-control form-control-alternative">
                                                <option value="">Asignar Ejecutivo</option>
                                                <option :value="e.id" v-for="e in ejecutivos">{{ e.nombre + ' ' + e.apellido }}</option>
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
                            <!-- Address -->
                            <h6 class="heading-small text-muted mb-4">Información de contacto </h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ValidationProvider rules="required" vid="direccion" v-slot="{ errors, classes }">
                                            <div class="form-group" :class="(errors.length)?'has-danger':''">
                                                <label class="form-control-label">Dirección</label>
                                                <input name="direccion" v-model="usuario.direccion" type="text" class="form-control form-control-alternative" :class="(errors.length)?'is-invalid':''" placeholder="Dirección" >
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
                                                <select name="comuna" id="comuna" v-model="usuario.ciudad_id" class="form-control form-control-alternative" :class="(errors.length)?'is-invalid':''">
                                                    <option value="">Selecciona una ciudad ...</option>
                                                    <option v-for="c in comunas" :value="c.id">{{c.comuna}}</option>
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
                            <!-- Description -->
                            <h6 class="heading-small text-muted mb-4">Acerca de mi</h6>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label>Acerca de mi</label>
                                    <textarea rows="4" class="form-control form-control-alternative" placeholder="Algunas palabras acerca de ti..."></textarea>
                                </div>
                            </div>
                            <p class="mt-4 mb-4 text-muted"></p>
                            <div class="col text-center">
                                <button type="submit" class="btn btn-success">Agregar nueva empresa</button>
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
        props: ['regiones', 'ejecutivos'],

        data() {
            return {
                usuario: {
                    apodo: '',
                    nombre: '',
                    apellido: '',
                    email: '',
                    direccion: '',
                    ciudad_id: '',
                    ejecutivo_id: '',
                    sexo: '',
                    rut: '',
                    password: '',
                    password_confirmation: '',
                },
                comunas: [],
                region_id: '',
            }
        },

        methods: {
            onSubmit () {
                axios.post('/api/clientes/', this.usuario)
                    .then(() => {
                        Swal.fire({
                            type: 'success',
                            title: 'Se ha creado un nuevo administrador',
                        });

                        window.location = '/administradores';
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
                axios.get('/api/regiones/' + value + '/comunas')
                    .then((response) => {
                        this.comunas = response.data;
                    });
            }
        }
    }
</script>