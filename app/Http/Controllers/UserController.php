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
//        $i = 0;
//        $j = time();
//        DB::table('users')->orderBy('id')->chunk(1000,function($users) use (&$i,&$j){
//            echo $i.':';
//            $i++;
//            echo time().PHP_EOL;
//        });
//        echo '完了';
        //1520259906 - 1520259878

//        $count = DB::table('users')->count();
//        // int 类型的
//        var_dump($count);
//        $age = DB::table('users')->max('age');
//        var_dump($age);
//        $avg_age = DB::table('users')->avg('age');
//        // 浮点数
//        var_dump($avg_age);

        // 自定义查询字段
//        $users = DB::table('users')->select('name','age as a')->get();
//        var_dump($users);
        // distinct只能作用在只查询单个元素时起作用
//        $users = DB::table('users')->select('age','name')->distinct()->get();
//        var_dump($users);
        // 添加新的查询字段
//        $query = DB::table('users')->select('name');
//        $users = $query->addSelect('age')->get();
//        var_dump($users);
        // 使用字符查询字段
//        $users = DB::table('users')
//            ->select(DB::raw('count(*) as user_count,age'))
//            ->where('age','=',20)
//            ->groupBy('age')
//            ->get();
//        var_dump($users);
//        $users = DB::table('users')
//            ->join('orders','users.id','=','orders.user_id')
//            ->select('users.*','orders.ordersn')
//            ->get();
//        var_dump($users);
//        $users = DB::table('users')
//            ->leftJoin('orders','users.id','=','orders.user_id')
//            ->get();
//        dump($users);

        // unions
//        $last_age = DB::table('users')->where('age','=','20');
//        $users = DB::table('users')->where('age','=','30')->union($last_age)->get();
//        dump($users);

        // where 比较符的查询
//        $users = DB::table('users')->where('age','=',20)->get();
//        dump($users);
        // 方便的简单=
//        $users = DB::table('users')->where('age',20)->get();
//        dump($users);
        // 可以传一个数组
//        $users = DB::table('users')->where(
//            [
//                ['age',20],
//                ['name','like','张%']
//            ]
//        )->get();

        // 或者查询
//        $users = DB::table('users')
//            ->where('age','>',40)
//            ->orwhere('name','like','张%')
//            ->get();
//        dump($users);

        // 范围查询
//        $users = DB::table('users')
//            ->whereBetween('age',[10,30])->get();
//        dump($users);

        // 不在范围的查询
//        $users = DB::table('users')
//            ->whereNotBetween('age',[10,30])->get();
//        dump($users);

        // 在具体的值的范围
//        $users = DB::table('users')
//            ->whereIn('age',[10,20])
//            ->get();
//        dump($users);

        // 不在具体的值的范围
//        $users = DB::table('users')
//            ->whereNotIn('age',[10,20])
//            ->get();
//        dump($users);

        // 值为NULL
//        $users = DB::table('users')
//            ->whereNull('updated_at')
//            ->get();
//        dump($users);

        // 值不为NULL
//        $users = DB::table('users')
//            ->whereNotNull('updated_at')
//            ->get();
//        dump($users);
        // 把查询的字段当date进行比较
//        $users = DB::table('users')
//            ->whereDate('test_time','2018-03-06')
//            ->get();
//        dump($users);

        // 把查询的字段当月来进行比较
//        $users = DB::table('users')
//            ->whereMonth('test_time',1)
//            ->get();
//        dump($users);

        // 把查询的字段当月的具体的某一天来比较
//        $users = DB::table('users')
//            ->whereDay('created_at',6)
//            ->get();
//        dump($users);

        // 把查询的字段当具体的某一年来比较
//        $users = DB::table('users')
//            ->whereYear('created_at','2018')
//            ->get();
//        dump($users);

        // 同一个表的两个列的比较
//        $users = DB::table('users')
//            ->whereColumn('first_name','last_name')
//            ->get();
//        dump($users);
//        $users = DB::table('users')
//            ->whereColumn('updated_at','>','created_at')
//            ->get();
//        dump($users);
//        $users = DB::table('users')
//            ->whereColumn(
//                [
//                    ['first_name','=','last_name'],
//                    ['updated_at','>','created_at']
//                ]
//            )
//            ->get();
//        dump($users);

        // 查询参数组合
        $users = DB::table('users')
            ->where('name','=','张三')
            ->orWhere(function($query){
                $query->where('age',20)
                    ->where('updated_at',0);
            })
            ->get();
        dump($users);
    }
}