<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    protected $table = 'users';
    protected $primaryKey = 'id';
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    public function phone()
    {
        return $this->hasOne('App\Phone');
    }
    public function post()
    {
        return $this->hasOne('App\Post')->withDefault(['info'=>'18888888888']);
    }
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
    public function roles()
    {
        return $this->belongsToMany('App\Role','role_user','user_id','role_id');
    }
}
