<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag')->truncate();
        DB::table('tag')->insert([
            [
                'value'             => 'git',
                'diskusi_id'        => 1
            ]
        ]);
    }
}
