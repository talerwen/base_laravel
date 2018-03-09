<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/9 0009
 * Time: 10:55
 */
namespace App;
use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}