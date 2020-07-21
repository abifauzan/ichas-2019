<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Model\User', 'id_role');
    }

    public function transaction()
    {
        return $this->belongsTo('App\Model\Transaction', 'id_role');
    }

}
