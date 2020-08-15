<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $table = "vote";

    protected $fillable = ["value", "diskusi_id"];

    public function diskusi()
    {
    	return $this->belongsTo(Diskusi::class, 'diskusi_id');
    }
}
