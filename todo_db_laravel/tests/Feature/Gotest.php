<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use App\Person;

class Gotest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    use DatabaseMigrations;

    public function testGo()
    {
        // ダミーで使用するデータ
        factory(User::class)->create([
            'name' => 'AAA',
            'email' => 'BBB@CCC.COM',
            'password' => 'ABCABC',
        ]);
        factory(User::class, 10)->create();

        $this->assertDatabaseHas('users', [
            'name' => 'AAA',
            'email' => 'BBB@CCC.COM',
            'password' => 'ABCABC',
        ]);
    }



}
