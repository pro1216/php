<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルのクリア
    DB::table('books')->truncate();

    // 初期データ用意（列名をキーとする連想配列）
    $books = [
              ['name' => 'PHP Book',
               'price' => 2000,
               'author' => 'PHPER',
               'img' => '/storage/img/php.png',
               'GenreId' => '1'],
              ['name' => 'Laravel Book',
               'price' => 3000,
               'author' => null,
                'img' => '/storage/img/laravel.png',
                'GenreId' => '1'],
              ['name' => 'Ruby Book',
               'price' => 2500,
               'author' => 'Rubyist',
                'img' => '/storage/img/ruby.png',
               'GenreId' => '1']
             ];

    // 登録
    foreach($books as $book) {
      \App\Book::create($book);
    }
    }

}
