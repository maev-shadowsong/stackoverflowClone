<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diskusi extends Model
{
    protected $table = "diskusi";

    protected $fillable = ["judul", "isi", "type_diskusi", "user_id", "pertanyaan_id", "jawaban_id","jawaban_tepat_id"];

    public function Tags()
    {
        return $this->hasMany('App\Tag');
    }

    public function Users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Votes()
    {
        return $this->hasMany('App\Vote');
    }

    public function Jawabans()
    {
        return $this->belongsTo(self::class, 'pertanyaan_id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'color_id');
    }
}
