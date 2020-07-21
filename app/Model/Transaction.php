<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->hasOne('App\Model\User', 'id', 'id_user');
    }

    public function role() {
        return $this->hasOne('App\Model\Role', 'id', 'id_role');
    }

}
