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
        $now = date('Y-m-d H:i:s');
        
        DB::table('books')->insert([
            'title'     => 'Book Title',
            'slug'     => 'book-title',
            'amazon_id'     => null,
            'google_id'     => null,
            'audible_id'     => null,
            'isbn_13'     => '1234567890123',
            'book_cover'     => null,
            'created_by'    => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('books')->insert([
            'title'     => 'Second Book Title',
            'slug'     => 'second-book-title',
            'amazon_id'     => null,
            'google_id'     => null,
            'audible_id'     => null,
            'isbn_13'     => '1234567890124',
            'book_cover'     => null,
            'created_by'    => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
    }
}
