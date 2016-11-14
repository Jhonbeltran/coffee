<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Coffee\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCorrectFillForm()
    {
        $this->visit('/usuario/create')
         ->type('Miguel', 'name')
         ->type('pruebaTest@gmail.com', 'email')
         ->type('123', 'password')
         ->press('Registrar')
         ->seePageIs('/usuario');
    }
}
