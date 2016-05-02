<?php 

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserSignUpTest extends TestCase
{
    use DatabaseTransactions;

    public function testCheckAllFieldsEmpty()
    {
        $user = factory('App\User')->create();

           $this->visit('/')
           ->type('lytopze', 'username')
           ->type('lytopze@gmail.com', 'email')
           ->type('tope0852', 'password')
           ->press('Sign up')
           ->see('lytopze');
    }

}