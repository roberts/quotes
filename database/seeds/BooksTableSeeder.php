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
            'title'     => 'In The Plex: How Google Thinks, Works, and Shapes Our Lives',
            'slug'     => 'in-the-plex',
            'amazon_id'     => '1416596585',
            'google_id'     => 'V1u1f8sv3k8C',
            'audible_id'     => 'B004UN8UD2',
            'isbn_13'     => '9781416596585',
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
