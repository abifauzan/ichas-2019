<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserConference extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->hasOne('App\Model\User', 'id', 'id_user');
    }

    public function paper() {
        return $this->hasOne('App\Model\PaperRegistrant', 'id', 'id_paper');
    }

}
