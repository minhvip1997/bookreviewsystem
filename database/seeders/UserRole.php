<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            [
                'user_id' => '3',
                'role_id' => '1'
            ],
            [
                'user_id' => '4',
                'role_id' => '1'
            ],
            [
                'user_id' => '1',
                'role_id' => '2'
            ],
            [
                'user_id' => '2',
                'role_id' => '2'
            ]
        ]);
    }
}
