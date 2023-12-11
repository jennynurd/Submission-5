<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date =date('Y/m/d H:i:s');
        Books::create(
            [
                'book_name' => 'PHP Programing',
                'author' => 'Alex Tarnar',
                'published_at' => $date

            ]
            );

        foreach($booksData as $value){
            Books::create($value);
        }
    }
}
