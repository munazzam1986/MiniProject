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

    public function testInsertCar()
    {
        $car = new Car();

        $car-> make = 'Honda';

        $car-> model = 'Accord';

        $car-> year = 2011;

        $this->assertTrue($car->save());
    }
}
