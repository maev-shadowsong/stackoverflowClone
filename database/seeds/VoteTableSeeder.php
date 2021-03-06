<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vote')->truncate();
        DB::table('vote')->insert([
            [
                'value'             => 1,
                'diskusi_id'        => 1,
                'user_id'           => 4,
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now()
            ],
            [
                'value'             => 1,
                'diskusi_id'        => 1,
                'user_id'           => 3,
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now()
            ],
            [
                'value'             => -1,
                'diskusi_id'        => 2,
                'user_id'           => 4,
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now()
            ]
        ]);
    }
}
