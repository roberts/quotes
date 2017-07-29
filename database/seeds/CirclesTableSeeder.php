<?php

use Illuminate\Database\Seeder;

class CirclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$now = date('Y-m-d H:i:s');

    	DB::table('circles')->insert([
            'slug'          => 'business',
            'title'         => 'Business',
            'description'   => 'For broad business sub-circles.',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'sports',
            'title'         => 'Sports',
            'description'   => 'For sports sub-circles.',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'politics',
            'title'         => 'Politics',
            'description'   => 'For broad politics sub-circles.',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'entertainment',
            'title'         => 'Entertainment',
            'description'   => 'For non-sports entertainment & celebrity sub-circles.',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'education',
            'title'         => 'Education',
            'description'   => 'For teachers, public speakers, philophers, non-fiction authors, and other related sub-circles.',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'other',
            'title'         => 'Other',
            'description'   => 'For other sub-circles like Religious Leaders.',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'ignore',
            'title'         => 'Ignore',
            'description'   => 'Do not display on Tipoff. Placeholder.',
            'created_at'    => $now,
            'updated_at'    => $now,
            'deleted_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'ignore-2',
            'title'         => 'Ignore Also',
            'description'   => 'Do not display on Tipoff. Placeholder.',
            'created_at'    => $now,
            'updated_at'    => $now,
            'deleted_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'popular',
            'title'         => 'Popular',
            'description'   => 'Well known personalities that get a lot of traffic and have enough thoughts/quotes on business and leadership topics.',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'highlight',
            'title'         => 'Highlight',
            'description'   => 'Not only popular, but have a reputation for quality insight into business and leadership topics. Authors most shared by Tipoff social pushes.', // Featured on tipoff quotes authors page
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'highlight-bookauthors',
            'title'         => 'Highlighted Book Authors',
            'description'   => 'Most popular authors known for business and leadership books.', // Featured on tipoff books authors page
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('household')->insert([
            'slug'          => 'household',
            'title'         => 'Household Names',
            'description'   => 'A sub-set of popular for the most well-known personalities of all types that the vast majority of households in the US know.',
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
    }
}
