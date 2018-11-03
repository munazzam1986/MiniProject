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
    public function testCarsCollectionCount()
    {
        //get the car collection (all records from cars table)
        $carsCollection = Car::All();
        //test if there are 50 records stored in cars table inserted by seeder
        $this->assertCount(350,$carsCollection);
    }
}