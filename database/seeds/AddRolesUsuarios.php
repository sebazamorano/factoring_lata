<?php

use Illuminate\Database\Seeder;
use Silber\Bouncer\BouncerFacade;


class AddRolesUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = Bouncer::role()->firstOrCreate([
            'name' => 'admin',
            'title' => 'Administrator',
        ]);

        $super = Bouncer::role()->firstOrCreate([
            'name' => 'super',
            'title' => 'Super Administrador',
        ]);

        $cliente = Bouncer::role()->firstOrCreate([
            'name' => 'cliente',
            'title' => 'Cliente',
        ]);

        $ejecutivo = Bouncer::role()->firstOrCreate([
            'name' => 'ejecutivo',
            'title' => 'Ejecutivo',
        ]);

        $evaluador = Bouncer::role()->firstOrCreate([
            'name' => 'evaluador',
            'title' => 'Ejecutivo Evaluador',
        ]);

        $adminCreate = Bouncer::ability()->firstOrCreate([
            'name' => 'create-admin',
            'title' => 'Crear Administrador',
        ]);
        Bouncer::allow($super)->to($adminCreate);

        $adminCreate = Bouncer::ability()->firstOrCreate([
            'name' => 'view-admin',
            'title' => 'Ver Administrador',
        ]);
        Bouncer::allow($super)->to($adminCreate);

        $adminView = Bouncer::ability()->firstOrCreate([
            'name' => 'edit-admin',
            'title' => 'Editar Administrador',
        ]);
        Bouncer::allow($super)->to($adminView);

        $adminView = Bouncer::ability()->firstOrCreate([
            'name' => 'delete-admin',
            'title' => 'Eliminar Administrador',
        ]);
        Bouncer::allow($super)->to($adminView);
    }
}
