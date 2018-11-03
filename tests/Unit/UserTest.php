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
    public function testInsertUser()
    {

        $user = new User();

        $user-> name = 'Munazzam Mirza';

        $user->email='mm2468@njit.edu';

        $user->password= password_hash('123456',1);

        $this->assertTrue($user->save());
    }
}
