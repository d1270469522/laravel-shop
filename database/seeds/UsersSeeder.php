<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // 通过 factory 方法生成 100 个用户并保存到数据库中
        factory(\App\Models\User::class, 100)->create();

        // 插入到数据库中
        User::insert($user_array);

        // 单独处理第一个用户的数据
        $user = User::find(1);
        $user->name = '天尽头流浪';
        $user->email = '1270469522@qq.com';
        $user->password = bcrypt('11111111');
        $user->save();

        // 将 2 号用户指派为『管理员』
        $user = User::find(2);
        $user->name = 'user2';
        $user->email = 'user2@qq.com';
        $user->password = bcrypt('11111111');
        $user->save();

        // 将 2 号用户指派为『管理员』
        $user = User::find(3);
        $user->name = 'user3';
        $user->email = 'user3@qq.com';
        $user->password = bcrypt('11111111');
        $user->save();
    }
}
