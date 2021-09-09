<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            [
                'name' => 'admin',
                'role_id'=>'1'
            ],
            [
                'name' => 'manager',
                'role_id'=>'3'
            ],
            [
                'name' => 'booker',
                'role_id'=>'2'
            ],
            [
                'name' => 'user',
                'role_id'=>'4'
            ]
        ]);
    }
}
