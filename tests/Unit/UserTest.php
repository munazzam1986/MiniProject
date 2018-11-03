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
    public function testCarYearAsInteger()
    {
        //Pick any random car record
        $car = Car::inrandomorder()->first();

        $stringYear = $car->year;

        $this->assertTrue(ctype_digit($stringYear));
    }
}