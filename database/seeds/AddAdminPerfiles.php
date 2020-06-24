<?php

use Illuminate\Database\Seeder;

class AddAdminPerfiles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminCreate = Bouncer::ability()->firstOrCreate([
            'name' => 'create-eje',
            'title' => 'Crear Ejecutivo',
        ]);
        Bouncer::allow('admin')->to($adminCreate);

        $adminCreate = Bouncer::ability()->firstOrCreate([
            'name' => 'view-eje',
            'title' => 'Ver Ejecutivo',
        ]);
        Bouncer::allow('admin')->to($adminCreate);

        $adminView = Bouncer::ability()->firstOrCreate([
            'name' => 'edit-eje',
            'title' => 'Editar Ejecutivo',
        ]);
        Bouncer::allow('admin')->to($adminView);

        $adminView = Bouncer::ability()->firstOrCreate([
            'name' => 'delete-eje',
            'title' => 'Eliminar Ejecutivo',
        ]);

        Bouncer::allow('admin')->to($adminView);
    }
}
