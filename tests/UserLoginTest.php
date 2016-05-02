<?php 

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserLoginTest extends TestCase
{
    use DatabaseTransactions;

    public function testThatAllFieldsAreEmpty()
    {
        $user = factory('App\User')->create();

        $response = $this->visit('/login')
           ->press('Log In')
           ->see('Whoops! Something went wrong!')
           ->see('The username field is required.')
           ->see('The password field is required.');

    }

    public function testThatPasswordFieldIsMissing()
    {
        $user = factory('App\User')->create();

        $response = $this->visit('/login')
           ->press('Log In')
           ->see('Whoops! Something went wrong!')
           ->see('The password field is required.');

    }

    public function testThatUsernameFieldIsMissing()
    {
        $user = factory('App\User')->create();

        $response = $this->visit('/login')
           ->press('Log In')
           ->see('Whoops! Something went wrong!')
           ->see('The username field is required.');

    }

    public function testThatUserLogin()
    {
        $user = factory('App\User')->create();

        $response = $this->actingAs($user)
           ->visit('/login')
           ->type('temitope', 'username')
           ->type('tope0852', 'password')
           ->press('Log In')
           ->see($user->username)
           ->see('Logout');

    }

}