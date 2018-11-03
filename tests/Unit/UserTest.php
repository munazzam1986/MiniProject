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

    public function testUsersCollectionCount()
    {
        $usersCollection = User::All();

        $this->assertCount(50,$usersCollection);
    }
}
