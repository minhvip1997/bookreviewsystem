<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'admin',
            ],
            [
                'name' => 'booker',
            ],
            [
                'name' => 'manager',
            ],
            [
                'name' => 'user',
            ]
        ]);
    }
}
