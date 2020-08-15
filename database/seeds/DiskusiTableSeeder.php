<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiskusiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diskusi')->truncate();
        DB::table('diskusi')->insert([
            [
                'judul'             => 'Bagaimana caranya git clone?',
                'isi'               => 'hello gaes, baru belajar maenan git nich. btw sob, ane ada pertanyaan, bagaimana caranya git clone ke suatu repo? Apakah perlu bergabung dengan repo tersebut atau bagaimana?',
                'type_diskusi'      => 'pertanyaan',
                'user_id'           => 1,
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now()
            ]
        ]);

        DB::table('diskusi')->insert([
            [
                'isi'               => 'Wah kurang tau sob, mungkin bawah ane tau.',
                'pertanyaan_id'     =>  1,
                'type_diskusi'      => 'jawaban',
                'user_id'           => 3,
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now()
            ],
            [
                'isi'               => 'bisa lebih spesifik lagi ga sob, pertanyaannya?',
                'pertanyaan_id'     =>  1,
                'type_diskusi'      => 'komentar',
                'user_id'           => 4,
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now()
            ]
        ]);

        DB::table('diskusi')->insert([
            [
                'isi'               => 'Woy jangan nyampah woy',
                'jawaban_id'        =>  2,
                'type_diskusi'      => 'komentar',
                'user_id'           => 2,
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now()
            ]
        ]);

        DB::table('diskusi')->insert([
            [
                'judul'             => 'Bagaimana caranya git push?',
                'isi'               => 'hello gaes, baru belajar maenan git nich. btw sob, ane ada pertanyaan, bagaimana caranya git push ke suatu repo? Apakah perlu bergabung dengan repo tersebut atau bagaimana?',
                'type_diskusi'      => 'pertanyaan',
                'user_id'           => 2,
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now()
            ]
        ]);
    }
}
