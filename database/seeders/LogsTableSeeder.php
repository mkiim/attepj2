<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' =>'1',
            'name' => 'kei',
            'email' =>'kei@gmail.com',
            'password' => 'kei00001'
        ];
        DB::table('users')->insert($param);
        $param = [
            'id' => '2',
            'name' => 'ryo',
            'email' => 'ryo@gmail.com',
            'password' => 'ryo00002'
        ];
        DB::table('users')->insert($param);
    }
}
