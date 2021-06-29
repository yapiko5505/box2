<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Holiday;

class CalendarTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCalendar()
    {
        factory(holidays::class)->create([
            'day' => 'YY-MM-DD',
            'description' => 'BBB',
            
        ]);

        factory(holidays::class, 10)->create();

        $this->assertDatabaseHas('holidays', [
            'day' => 'YY-MM-DD',
            'description' => 'BBB',
        ]);






    }
}
