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
            'description'   => 'Not only popular, but have a reputation for quality insight into business and leadership topics. Authors most shared by Tipoff social pushes and featured on Quotes Authors page.',
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'highlight-bookauthors',
            'title'         => 'Highlighted Book Authors',
            'description'   => 'Most popular authors known for business and leadership books. Featured on Books Authors page.',
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'household',
            'title'         => 'Household Names',
            'description'   => 'A sub-set of popular for the most well-known personalities of all types that the vast majority of households in the US know.',
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'never-share',
            'title'         => 'Never Share Authors',
            'description'   => 'Authors who should never be shared on social media because they do not fit with Tipoff brand identity for business & leadership.',
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'social-share',
            'title'         => 'Other Social Share Authors',
            'description'   => 'Authors who should should be treated differently on social media when shared. More details coming.',
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'basketball',
            'title'         => 'Basketball',
            'description'   => 'Basketball related authors.',
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'football',
            'title'         => 'Football',
            'description'   => 'Football related authors.',
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'baseball',
            'title'         => 'Baseball',
            'description'   => 'Baseball related authors.',
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'soccer',
            'title'         => 'Soccer',
            'description'   => 'Soccer related authors.',
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'hockey',
            'title'         => 'Hockey',
            'description'   => 'Hockey related authors.',
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'golf',
            'title'         => 'Golf',
            'description'   => 'Golf related authors.',
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'boxing',
            'title'         => 'Boxing',
            'description'   => 'Boxing related authors.',
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'mma',
            'title'         => 'Mixed Martial Arts',
            'description'   => 'MMA related authors.',
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'olympic',
            'title'         => 'Olympic Sports',
            'description'   => 'Olympic sports not otherwise listed (track & field, swimming, skiing, etc.).',
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('circles')->insert([
            'slug'          => 'nascar',
            'title'         => 'NASCAR',
            'description'   => 'NASCAR related authors.',
            'primary'       => 9,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
    }
}
