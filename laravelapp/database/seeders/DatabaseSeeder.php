<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\supprt\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $param = [
            'name' => 'hogehoge',
            'postal' => '123-4567',
            'address' => 'よつば市よつば１－１－１',
            'phone' => '090-1234-5678',
            'email' => 'hogehohe@yahoo.co.jp',
            'todo' => '資材',
        ];
        DB::table('address') ->insert($param);

        $param = [
            'name' => 'morimori',
            'postal' => '123-4444',
            'address' => 'よつば市みつば２－１－１',
            'phone' => '090-1111-2222',
            'email' => 'morino@yahoo.co.jp',
            'todo' => '資材',
        ];
        DB::table('address') ->insert($param);

        $param = [
            'name' => 'yukuyuku',
            'postal' => '123-5555',
            'address' => 'よつば市ふたば３－１－１',
            'phone' => '090-1212-3333',
            'email' => 'yukuyuku@yahoo.co.jp',
            'todo' => '資材',
        ];
        DB::table('address') ->insert($param);

        $this->call(AddressTableSeeder::class);
    }
}
