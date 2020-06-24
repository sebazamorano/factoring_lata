<?php

namespace Tests\Browser;

use App\Usuario;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $user = Usuario::first();



            $this->browse(function ($browser) use ($user) {
                $browser->visit('/login')
                    ->type('email', $user->email)
                    ->type('password', '12345678')
                    ->press('Ingresar')
                    ->assertPathIs('/home');
            });
        });
    }
}
