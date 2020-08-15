<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'name'              => 'Paijo',
                'email'             => 'paijo@example.com',
                'nama_lengkap'      => 'Paijo bin Painjul',
                'password'          => bcrypt('paijo123'),
                'reputasi'          => 20,
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now()
            ],
            [
                'name'              => 'Paido',
                'email'             => 'paido@example.com',
                'nama_lengkap'      => 'Paido bin Painjul',
                'password'          => bcrypt('paido123'),
                'reputasi'          => 0,
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now()
            ],
            [
                'name'              => 'Paojo',
                'email'             => 'paojo@example.com',
                'nama_lengkap'      => 'Paojo bin Painjul',
                'password'          => bcrypt('paojo123'),
                'reputasi'          => 10,
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now()
            ],
            [
                'name'              => 'Paimo',
                'email'             => 'paimo@example.com',
                'nama_lengkap'      => 'Paimo bin Painjul',
                'password'          => bcrypt('paimo123'),
                'reputasi'          => 60,
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now()
            ],
        ]);
    }
}
