<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // テーブルのクリア
    DB::table('genres')->truncate();

    // 初期データ用意（列名をキーとする連想配列）
    $genres = [
              ['genre' => '技術'],
              ['genre' => '健康'],
              ['genre' => '勉強']
             ];

    // 登録
    foreach($genres as $genres) {
      \App\Genre::create($genres);
    }
    }
    
}
