<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Nuwave\Lighthouse\Testing\MakesGraphQLRequests;

class UserTest extends TestCase
{
    use MakesGraphQLRequests, RefreshDatabase;

    public function testUserRegistration(): void
    {
        $this->graphQL(/** @lang GraphQL */'
            mutation {
                register(input: {name:"test", email: "test@gmail.com",password: "password", password_confirmation:"password"}) {
                  status
                  tokens {
                    access_token
                    refresh_token
                    expires_in
                    token_type
                    user {
                      id
                      name
                      email
                    }
                  } 
                }
              }
        ')->assertJson([
            "data" => [
                "status" => "SUCCESS"
            ]
        ]);
    }

    public function testUserLogin(): void
    {
        $user = new User(['email' => 'richard@bearzu.com', 'password' => Hash::make('password')]);

        $this->graphQL(/** @lang GraphQL */ '
            {
                login(input: {
                    username: "richard@bearzu.com"
                    password: "password"
                }) {
                    access_token   
                }
            }
        ');
    }
}
