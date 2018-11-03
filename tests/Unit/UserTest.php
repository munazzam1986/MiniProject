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
    public function testCarsMake()
    {

        $car = Car::inrandomorder()->first();

        $array = array('FORD', 'HONDA', 'TOYOTA');

        $make = $car->make;

        $this->assertContains(strtoupper($make), $array);
    }
}