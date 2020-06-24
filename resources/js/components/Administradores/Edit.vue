<template>
    <div class="container-fluid mt--7" id="crearAdmin">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Nuevo Administrador</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ValidationObserver ref="observer" v-slot="{ passes }">
                            <form method="post" @submit.prevent="passes(onSubmit)">
                                <h6 class="heading-small text-muted mb-4">Información Administrador</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-3">
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
                                        <div class="col-lg-3">
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
                                        <div class="col-lg-3">
                                            <ValidationProvider rules="required|rut" vid="rut" v-slot="{ errors, classes }">
                                                <div class="form-group" :class="(errors.length)?'has-danger':''">
                                                    <label class="form-control-label" for="input-rut">Rut</label>
                                                    <input name="rut" v-model="usuario.rut" v-rut:live id="input-rut" type="text" class="form-control form-control-alternative" :class="(errors.length)?'is-invalid':''" placeholder="11111111-1" >
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ errors.toString() }}</strong>
                                            </span>
                                                </div>
                                            </ValidationProvider>
                                        </div>
                                        <div class="col-lg-3">
                                            <ValidationProvider rules="required" vid="sexo" v-slot="{ errors, classes }">
                                                <div class="form-group" :class="(errors.length)?'has-danger':''">
                                                    <label class="form-control-label">Sexo: </label>
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input name="sexo" v-model="usuario.sexo" class="custom-control-input" :class="(errors.length)?'is-invalid':''" value="f" id="femeninoRadio" type="radio">
                                                        <label class="custom-control-label" for="femeninoRadio">Femenino</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mb-3">
                                                        <input name="sexo" v-model="usuario.sexo" class="custom-control-input" :class="(errors.length)?'is-invalid':''" value="m" id="masculinoRadio" type="radio">
                                                        <label class="custom-control-label" for="masculinoRadio">Masculino</label>
                                                    </div>

                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ errors.toString()}}</strong>
                                            </span>
                                                </div>
                                            </ValidationProvider>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
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
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ValidationProvider rules="required|min:8" v-slot="{ errors, classes }" vid="confirmation">
                                                <div class="form-group" :class="(errors.length)?'has-danger':''">
                                                    <label class="form-control-label">Contraseña</label>
                                                    <input name="contraseña" v-model="usuario.password" id="input-contraseña" type="password" class="form-control form-control-alternative" :class="(errors.length)?'is-invalid':''" placeholder="Contraseña">
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ errors.toString()}}</strong>
                                            </span>
                                                </div>
                                            </ValidationProvider>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ValidationProvider rules="required|confirmed:confirmation" v-slot="{ errors, classes }" >
                                                <div class="form-group" :class="(errors.length)?'has-danger':''">
                                                    <label class="form-control-label" for="input-password-confirmation">Confirmar Contraseña</label>
                                                    <input name="contraseña-confirmación" id="input-password-confirmation" v-model="usuario.password_confirmation" type="password" class="form-control form-control-alternative" :class="(errors.length)?'is-invalid':''" placeholder="Contraseña">
                                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ errors.toString()}}</strong>
                                            </span>
                                                </div>
                                            </ValidationProvider>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <p class="mt-4 mb-4 text-muted">
                                </p><div class="col text-center">
                                <button type="submit" class="btn btn-success">Crear Administrador</button>
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
        props: ['regiones', 'admin'],


        data() {
            return {
                usuario: this.admin,
                region_id: this.admin.ciudad.provincia.region_id,
                comunas: []
            }
        },

        created () {
            if (this.region_id) {
                this.getComunas(this.region_id);
            }
        },

        methods: {
            onSubmit () {
                axios.put(`/api/administradores/${this.admin.id}`, this.usuario)
                    .then((response) => {
                        Swal.fire({
                            type: 'success',
                            title: 'Se ha actualizado ',
                        });

                        this.usuario = response.data;
                    }, (error) => {
                        Swal.fire({
                            type: 'error',
                            title: 'Hay un error al actualizar'
                        })

                        this.$refs.observer.setErrors(error.response.data.errors);
                    });
            },

            getComunas (region) {
                axios.get('/api/regiones/' + region + '/comunas')
                    .then((response)  => {
                        this.comunas = response.data;
                    });
            }
        },
    }
</script>
