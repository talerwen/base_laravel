<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/9 0009
 * Time: 11:49
 */
namespace App;
use Illuminate\Database\Eloquent\Model;
class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}