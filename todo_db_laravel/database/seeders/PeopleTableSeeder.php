<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.jp',
            'age' => 12,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hanako',
            'mail' => 'hanako@hogehoge.jp',
            'age' => 34,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'satiko',
            'mail' => 'satiko@hogehoge.jp',
            'age' => 56,
        ];
        DB::table('people')->insert($param);
    }
}
