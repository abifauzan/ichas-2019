<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'id_role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role() {
        return $this->hasOne('App\Model\Role', 'id', 'id_role');
    }

    public function paymentType() {
        return $this->hasOne('App\Model\PaymentType', 'id', 'id_payment_type');
    }

    public function transaction() {
        return $this->belongsTo('App\Model\Transaction', 'id', 'id_user');
    }

    public function userSeminar() {
        return $this->belongsTo('App\Model\UserSeminar', 'id', 'id_user');
    }

    public function userConference() {
        return $this->belongsTo('App\Model\UserConference', 'id', 'id_user');
    }

    public function paper() {
        return $this->belongsTo('App\Model\PaperRegistrant', 'id', 'id_user');
    }

    public function verifyUser() {
        return $this->hasOne('App\ModelVerifyUser');
    }


}
