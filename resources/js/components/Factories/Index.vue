<template>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-11">
                                <h3 class="mb-0">Listado de Factories</h3>
                            </div>
                            <div class="col-1">
                                <a href="/factories/create" class="btn btn-sm btn-success"><i class="fas fa-plus"></i></a>
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
                                    <th scope="col">Dirección</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(f, index) in fact">
                                    <th scope="row">
                                        {{ f.nombre}}
                                    </th>
                                    <td>
                                        {{ f.dirección }}
                                    </td>
                                    <td>
                                        {{ f.ciudad_id }}
                                    </td>
                                    <td>
                                        <a href="#" @click="delUser(f, index)" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        <a :href="'factories/' + f.id + '/edit'" class="btn btn-sm btn-dark"><i class="fas fa-pen-alt"></i></a>
                                        <a :href="'factories/' + f.id" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
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
        props: ['factories'],

        data () {
            return {
                fact: this.factories,
            }
        },


        methods: {
            delFact (usuario, index) {
                Swal.fire({
                    title: '¿Estas seguro de eliminar?',
                    text: "Esto no se puede revertir",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, eliminar'
                }).then((result) => {
                    if (result.value) {
                        axios.delete('/api/usuarios/' + usuario.id).then(response => {
                            this.adm.splice(index, 1);
                            Swal.fire(
                                'Eliminado!',
                                'El Ejecutivo ha sido eliminado.',
                                'success'
                            );
                        });
                    }
                });
            }
        },

        filters: {
            fullName: (value) => {
                return value.nombre.concat(" ", value.apellido);
            }
        }
    }
</script>
