<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diskusi extends Model
{
    protected $table = "diskusi";

    protected $fillable = ["judul", "isi", "type_diskusi", "user_id", "pertanyaan_id", "jawaban_id","jawaban_tepat_id"];
}
