<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
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
                'title' => 'Fairy',
                'description' => 'While usually set in a fictional imagined world fantasy books include prominent elements of magic , mythology , or the supernatural',
                'parent_id'=>'1'
            ],
            [
                'title' => 'Cartoon',
                'description' => 'literary fiction refers to the perceived artistic writing style of the author. Their prose is meant to evoke deep thought through stories that offer personal or social commentary on a particular theme.',
                'parent_id'=>'2'
            ],
            [
                'title' => 'Dac nhan tam',
                'description' => 'Whether the focus is on emotional well-being, finances, or spirituality, self-help books center on encouraging personal improvement and confidence in a variety of facets of your life.',
                'parent_id'=>'3'
            ],
            [
                'title' => 'Sql',
                'description' => 'Computer science is the scientific and practical approach to computation and its applications.',
                'parent_id'=>'4'
            ]
        ]);
    }
}
