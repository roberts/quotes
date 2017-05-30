<?php

use Illuminate\Database\Seeder;

class Book_ContributionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('book_contributions')->insert([
            'title'     => 'Author',
            'slug'     => 'author',
            'description'    => 'Only one primary writer of the book. Can have contributors but nobody else named as a a co-author and is not an editor.',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);

        DB::table('book_contributions')->insert([
            'title'     => 'Co-Author',
            'slug'     => 'co-author',
            'description'    => 'Two or more writers of the book.',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);

        DB::table('book_contributions')->insert([
            'title'     => 'Editor',
            'slug'     => 'editor',
            'description'    => 'Editor of the book.',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);

        DB::table('book_contributions')->insert([
            'title'     => 'Assistant Editor',
            'slug'     => 'assistant-editor',
            'description'    => 'Used for all additonal Editors of the book.',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);

        DB::table('book_contributions')->insert([
            'title'     => 'Contributor',
            'slug'     => 'contributor',
            'description'    => 'Used for all named contributors to the book.',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
    }
}
