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
    public function testDeleteCar()
    {
        //get the user instance for a user which needs to be deleted
        $car = Car::where('make', 'Honda')
            ->where('model', 'Accord')
            ->where('year', 2000)
            ->first();
        //test if the car record  is deleted in the database
        $this->assertTrue($car->delete());
    }
}