<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'name' => 'add_book'
            ],
            [
                'name' => 'edit_book'
            ],
            [
                'name' => 'delete_book'
            ],
            [
                'name' => 'add_category'
            ]
            ,
            [
                'name' => 'edit_category'
            ]
            ,
            [
                'name' => 'delete_category'
            ]
            ,
            [
                'name' => 'accept_order'
            ]
            ,
            [
                'name' => 'delete_order'
            ]
        ]);
    }
}
