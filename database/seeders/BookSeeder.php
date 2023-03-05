<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'Lord of the Rings',
            'author' => 'J. R. R. Tolkien',
            'publisher' => 'Allen & Unwin',
            'year' => '1954',
            'cover' => 'https://images-na.ssl-images.amazon.com/imgaes/I/51Z9ZQZQFJL._SX331_BO1,204,203,200_.jpg',
            'description' => 'The Lord of the Rings is an epic high fantasy novel written by English author and scholar J. R. R. Tolkien.',
            'category' => 'Fantasy',
        ]);
    }
}
