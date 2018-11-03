<?php

namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testUpdateUser()
    {

        $user = User::where('email', 'mm2468@njit.edu')->first();

        $user->name= 'Steve Smith';

        $this->assertTrue($user->save());
    }
}
