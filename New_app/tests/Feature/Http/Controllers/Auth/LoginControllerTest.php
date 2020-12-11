<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    //Testing the login route
    /** @test */
    public function admin_login_form()
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200);
        $response->assertViewIs('auth.login');
    }

    //testing the login validation
    /** @test */
    public function admin_login_form_validation_errors()
    {
        $response = $this->post('/login', []);

        $response->assertStatus(302);
        $response->assertSessionHasErrors('email');
    }

    public function user_login_form()
    {
        $response = $this->get(route('ogin_page'));

        $response->assertStatus(200);
        $response->assertViewIs('users.login_register');
    }

    //testing the login validation
    /** @test */
//    public function user_login_form_validation_errors()
//    {
//        $response = $this->post('/ogin_page', []);
//
//        $response->assertStatus(302);
//        $response->assertSessionHasErrors('email');
//    }


}
