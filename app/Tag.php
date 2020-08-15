<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $table = "tag";

    protected $fillable = ["value", "diskusi_id"];

    public function diskusi()
    {
    	return $this->belongsTo(Diskusi::class, 'diskusi_id');
    }
}
