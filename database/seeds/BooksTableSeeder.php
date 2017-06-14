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
            'title'     => 'The Upstarts: How Uber, Airbnb, and the Killer Companies of the New Silicon Valley Are Changing the World',
            'slug'     => 'upstarts',
            'amazon_id'     => '0316396818',
            'google_id'     => 'nGSfDAAAQBAJ',
            'audible_id'     => 'B01MU30HTG',
            'isbn_13'     => '9780316396813',
            'book_cover'     => null,
            'created_by'    => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
    }
}
