<?php

use Illuminate\Database\Seeder;


class AddRolesUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \Bouncer::role()->firstOrCreate([
            'name' => 'admin',
            'title' => 'Administrator',
        ]);

        $admin = \Bouncer::role()->firstOrCreate([
            'name' => 'super',
            'title' => 'Super Administrador',
        ]);

        $admin = \Bouncer::role()->firstOrCreate([
            'name' => 'cliente',
            'title' => 'Cliente',
        ]);

        $admin = \Bouncer::role()->firstOrCreate([
            'name' => 'empresa',
            'title' => 'Empresa',
        ]);

        $admin = \Bouncer::role()->firstOrCreate([
            'name' => 'ejecutivo',
            'title' => 'Ejecutivo',
        ]);

        $admin = \Bouncer::role()->firstOrCreate([
            'name' => 'evaluador',
            'title' => 'Ejecutivo Evaluador',
        ]);


        \Bouncer::allow('super')->everything();
        \Bouncer::allow('admin')->everything();

    }
}
