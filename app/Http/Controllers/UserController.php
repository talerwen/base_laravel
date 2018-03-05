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
//        $users = DB::select('select * from users where id>?',[0]);
        // $user为数组类型,每一个结果都是php的stdClass对象
        // 参数名占位符绑定
//        $users = DB::select('select * from users where id = :id',['id'=>1]);
//        foreach($users as $user){
//            echo $user->name.PHP_EOL;
//        }
//        $insert_re = DB::insert('insert into users (name,age) value(?,?)',['李四',20]);
        // $insert_re为true或者false
        // dump($insert_re);
//        $update_re = DB::update('update users set name = "王五" where id > ?',[1]);
        // $update_re为更新的行数
//        var_dump($update_re);
//        $delete_re = DB::delete('delete from users where id = ?',[1]);
        // $delete_re为删除的行数
//        var_dump($delete_re);
        // 基本的操作,不需要返回值
//        DB::statement('drop table users');
        // 数据库的事务
//        DB::transaction(function(){
//            $a = DB::table('users')->update(['name' => '改变']);
//            var_dump($a);
//            $b = DB::table('posts')->where(['id'=>1])->update(['info'=>'改变']);
//            var_dump($b);
//        });
        // 如果数据量大会造成死锁时可以传第二个参数
//        DB::transaction(function(){
//            // 数据库处理
//        },4);

        //自己控制事务
        //        DB::beginTransaction();
        //        DB::rollback();
        //        DB::commit();

        // 查询构造器
        // 使用DB门面的table方法，返回查询构造器，get方法得到结果
//        $builder = DB::table('users');
//        var_dump($builder);
//        $users = $builder->get();
//        var_dump($users);
//        foreach($users as $user){
//            echo $user->name.PHP_EOL;
//        }
         // 返回一行
//        $user = DB::table('users')->first();
//        echo $user->name;
        // 返回一行的某个字段
//        $user = DB::table('users')->value('name');
//        dump($user);
        // 返回一个collection的列值
//        $users = DB::table('users')->pluck('name');
//        var_dump($users);
//        foreach($users as $k => $v){
//            dump($v);
//        }
        // 返回一个conllection的列植，并指定键名
//        $users = DB::table('users')->pluck('age','name');
//        var_dump($users);
//        DB::table('users')->get();
        $i = 0;
        $j = time();
        DB::table('users')->orderBy('id')->chunk(1000,function($users) use (&$i,&$j){
            echo $i.':';
            $i++;
            echo time().PHP_EOL;
        });
        echo '完了';
        //1520259906 - 1520259878
    }
}