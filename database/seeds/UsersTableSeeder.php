<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run(){
        // テーブルのクリア
    DB::table('users')->truncate();

    // 初期データ用意（列名をキーとする連想配列）
    $users = [
              ['name' => 'Sato Sho',
               'loginId' => 'Admin',
               'password' => '0'],
              ['name' => 'Sato Sho',
               'loginId' => '1',
               'password' => '1']
             ];

    // 登録
    foreach($users as $users){
      \App\User::create($users);
      }
      }
}
