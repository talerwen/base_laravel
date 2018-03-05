<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/5 0005
 * Time: 12:03
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class UserController extends Controller{
    public function index(){
        // 使用DB门面去查询
        // 预处理语句（prepared statement）的参数绑定
        // ?占位符绑定
        $users = DB::select('select * from users where id>?',[0]);
        // $user为数组类型,每一个结果都是php的stdClass对象
        // 参数名占位符绑定
        $users = DB::select('select * from users where id = :id',['id'=>1]);
        foreach($users as $user){
            echo $user->name.PHP_EOL;
        }
//        $insert_re = DB::insert('insert into users (name,age) value(?,?)',['李四',20]);
        // $insert_re为true或者false
        // dump($insert_re);
        $update_re = DB::update('update users set name = "王五" where id > ?',[1]);
        // $update_re为更新的行数
//        var_dump($update_re);
        $delete_re = DB::delete('delete from users where id = ?',[1]);
        // $delete_re为删除的行数
//        var_dump($delete_re);
        // 基本的操作,不需要返回值
//        DB::statement('drop table users');

    }
}