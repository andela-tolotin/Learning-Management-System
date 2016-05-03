<?php 

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserSignUpTest extends TestCase
{
  use DatabaseTransactions;

  public function testCheckAllFieldsEmpty()
  {
    $this->WithoutMiddleware();

    $user = factory('App\User')->create();

    $response = $this->call('/auth/register/', 
      'POST', [
      'username' => 'lytoz',
      'password' => 'tope0852',
      'email'    => 'lytopz@gmail'
    ]);
  }

}
