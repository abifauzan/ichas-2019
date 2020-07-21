<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PaperRegistrant extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->hasOne('App\Model\User', 'id', 'id_user');
    }
}
