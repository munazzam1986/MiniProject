<?php
namespace Tests\Unit;
use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class CarTest extends TestCase
{
    /**
     * Test 9.  Unit test to insert new record to Cars Table in the database.
     * New Car Record :
     * @return void
     */
    public function testCarsModel()
    {
        $car = Car::inrandomorder()->first();
        $model = $car->model;
        $this->assertInternalType('string', $model);
    }
}