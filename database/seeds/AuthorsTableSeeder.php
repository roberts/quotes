<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('authors')->insert([
            'slug'          => 'granny',
            'display_name'  => 'Granny',
            'last_name'     => 'Granny',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'sam-rutledge',
            'display_name'  => 'Sam Rutledge',
            'last_name'     => 'Rutledge',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'gene-roberts',
            'display_name'  => 'Gene Roberts',
            'last_name'     => 'Roberts',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'bill-gates',
            'display_name'  => 'Bill Gates',
            'last_name'     => 'Gates',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'jeff-bezos',
            'display_name'  => 'Jeff Bezos',
            'last_name'     => 'Bezos',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'mark-zuckerberg',
            'display_name'  => 'Mark Zuckerberg',
            'last_name'     => 'Zuckerberg',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'warrern-buffet',
            'display_name'  => 'Warren Buffet',
            'last_name'     => 'Buffet',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'larry-ellison',
            'display_name'  => 'Larry Ellison',
            'last_name'     => 'Ellison',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'steve-jobs',
            'display_name'  => 'Steve Jobs',
            'last_name'     => 'Jobs',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'elon-musk',
            'display_name'  => 'Elon Musk',
            'last_name'     => 'Musk',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'henry-ford',
            'display_name'  => 'Henry Ford',
            'last_name'     => 'Ford',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'cornelius-vanderbilt',
            'display_name'  => 'Cornelius Vanderbilt',
            'last_name'     => 'Vanderbilt',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'andrew-carnegie',
            'display_name'  => 'Andrew Carnegie',
            'last_name'     => 'Carnegie',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'john-rockefeller',
            'display_name'  => 'John Rockefeller',
            'last_name'     => 'Rockefeller',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'jp-morgan',
            'display_name'  => 'JP Morgan',
            'last_name'     => 'Morgan',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'thomas-edison',
            'display_name'  => 'Thomas Edison',
            'last_name'     => 'Edison',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'albert-einstein',
            'display_name'  => 'Albert Einstein',
            'last_name'     => 'Einstein',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'george-washington-carver',
            'display_name'  => 'George Washington Carver',
            'last_name'     => 'Carver',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'dale-carnegie',
            'display_name'  => 'Dale Carnegie',
            'last_name'     => 'Carnegie',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'peter-drucker',
            'display_name'  => 'Peter Drucker',
            'last_name'     => 'Drucker',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'john-calipari',
            'display_name'  => 'John Calipari',
            'last_name'     => 'Calipari',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'john-wooden',
            'display_name'  => 'John Wooden',
            'last_name'     => 'Wooden',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'michael-jordan',
            'display_name'  => 'Michael Jordan',
            'last_name'     => 'Jordan',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'lebron-james',
            'display_name'  => 'Lebron James',
            'last_name'     => 'James',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'muhammad-ali',
            'display_name'  => 'Muhammad Ali',
            'last_name'     => 'Ali',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'zig-ziglar',
            'display_name'  => 'Zig Ziglar',
            'last_name'     => 'Ziglar',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'john-maxwell',
            'display_name'  => 'John Maxwell',
            'last_name'     => 'Maxwell',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'seth-godin',
            'display_name'  => 'Seth Godin',
            'last_name'     => 'Godin',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'michael-porter',
            'display_name'  => 'Michael Porter',
            'last_name'     => 'Porter',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'mark-twain',
            'display_name'  => 'Mark Twain',
            'last_name'     => 'Twain',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'alfred-nobel',
            'display_name'  => 'Alfred Nobel',
            'last_name'     => 'Nobel',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'walt-disney',
            'display_name'  => 'Walt Disney',
            'last_name'     => 'Disney',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'sam-walton',
            'display_name'  => 'Sam Walton',
            'last_name'     => 'Walton',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'ray-kroc',
            'display_name'  => 'Ray Kroc',
            'last_name'     => 'Kroc',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'dave-ramsey',
            'display_name'  => 'Dave Ramsey',
            'last_name'     => 'Ramsey',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'chris-hogan',
            'display_name'  => 'Chris Hogan',
            'last_name'     => 'Hogan',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'kenneth-burke',
            'display_name'  => 'Kenneth Burke',
            'last_name'     => 'Burke',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'napoleon-hill',
            'display_name'  => 'Napoleon Hill',
            'last_name'     => 'Hill',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'jim-rohn',
            'display_name'  => 'Jim Rohn',
            'last_name'     => 'Rohn',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'tony-robbins',
            'display_name'  => 'Tony Robbins',
            'last_name'     => 'Robbins',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'gary-vaynerchuk',
            'display_name'  => 'Gary Vaynerchuk',
            'last_name'     => 'Vaynerchuk',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'tim-ferriss',
            'display_name'  => 'Tim Ferriss',
            'last_name'     => 'Ferriss',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'guy-kawasaki',
            'display_name'  => 'Guy Kawasaki',
            'last_name'     => 'Kawasaki',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'robert-kiyosaki',
            'display_name'  => 'Robert Kiyosaki',
            'last_name'     => 'Kiyosaki',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'stephen-covey',
            'display_name'  => 'Stephen Covey',
            'last_name'     => 'Covey',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'jim-collins',
            'display_name'  => 'Jim Collins',
            'last_name'     => 'Collins',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'socrates',
            'display_name'  => 'Socrates',
            'last_name'     => 'Socrates',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'plato',
            'display_name'  => 'Plato',
            'last_name'     => 'Plato',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'aristotle',
            'display_name'  => 'Aristotle',
            'last_name'     => 'Aristotle',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'sun-tzu',
            'display_name'  => 'Sun Tzu',
            'last_name'     => 'Tzu',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'confucius',
            'display_name'  => 'Confucius',
            'last_name'     => 'Confucius',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'jonathan-edwards',
            'display_name'  => 'Johnathan Edwards',
            'last_name'     => 'Edwards',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'charles-spurgeon',
            'display_name'  => 'Charles Spurgeon',
            'last_name'     => 'Spurgeon',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'cs-lewis',
            'display_name'  => 'CS Lewis',
            'last_name'     => 'Lewis',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'winston-churchill',
            'display_name'  => 'Winston Churchill',
            'last_name'     => 'Churchill',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'martin-luther-king-jr',
            'display_name'  => 'Martin Luther King Jr',
            'last_name'     => 'King',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'george-washington',
            'display_name'  => 'George Washington',
            'last_name'     => 'Washington',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'john-adams',
            'display_name'  => 'John Adams',
            'last_name'     => 'Adams',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'thomas-jefferson',
            'display_name'  => 'Thomas Jefferson',
            'last_name'     => 'Jefferson',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'james-madison',
            'display_name'  => 'James Madison',
            'last_name'     => 'Madison',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'james-monroe',
            'display_name'  => 'James Monroe',
            'last_name'     => 'Monroe',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'john-quincy-adams',
            'display_name'  => 'John Quincy Adams',
            'last_name'     => 'Adams',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'andrew-jackson',
            'display_name'  => 'Andrew Jackson',
            'last_name'     => 'jackson',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'martin-van-buren',
            'display_name'  => 'Martin Van Buren',
            'last_name'     => 'Buren',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'william-henry-harrison',
            'display_name'  => 'William Henry Harrison',
            'last_name'     => 'Harrison',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'john-tyler',
            'display_name'  => 'John Tyler',
            'last_name'     => 'Tyler',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'james-polk',
            'display_name'  => 'James Polk',
            'last_name'     => 'Polk',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'zachary-taylor',
            'display_name'  => 'Zachary Taylor',
            'last_name'     => 'Taylor',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'millard-fillmore',
            'display_name'  => 'Millard Fillmore',
            'last_name'     => 'Fillmore',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'franklin-pierce',
            'display_name'  => 'Franklin Pierce',
            'last_name'     => 'Pierce',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'james-buchanan',
            'display_name'  => 'James Buchanan',
            'last_name'     => 'Buchanan',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'abraham-lincoln',
            'display_name'  => 'Abraham Lincoln',
            'last_name'     => 'Lincoln',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'andrew-johnson',
            'display_name'  => 'Andrew Johnson',
            'last_name'     => 'Johnson',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'ulysses-s-grant',
            'display_name'  => 'Ulysses S Grant',
            'last_name'     => 'Grant',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'rutherford-b-hayes',
            'display_name'  => 'Rutherford B Hayes',
            'last_name'     => 'Hayes',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'james-garfield',
            'display_name'  => 'James Garfield',
            'last_name'     => 'Garfield',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'chester-a-arthur',
            'display_name'  => 'Chester A Arthur',
            'last_name'     => 'Arthur',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'grover-cleveland',
            'display_name'  => 'Grover Cleveland',
            'last_name'     => 'Cleveland',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'benjamin-harrison',
            'display_name'  => 'Benjamin Harrison',
            'last_name'     => 'Harrison',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'william-mckinley',
            'display_name'  => 'William Mckinley',
            'last_name'     => 'Mckinley',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'theodore-roosevelt',
            'display_name'  => 'Theodore Roosevelt',
            'last_name'     => 'Roosevelt',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'william-howard-taft',
            'display_name'  => 'William Howard Taft',
            'last_name'     => 'Taft',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'woodrow-wilson',
            'display_name'  => 'Woodrow Wilson',
            'last_name'     => 'Wilson',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'william-g-harding',
            'display_name'  => 'William G Harding',
            'last_name'     => 'Harding',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'calvin-coolidge',
            'display_name'  => 'Calvin Coolidge',
            'last_name'     => 'Coolidge',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'herbert-hoover',
            'display_name'  => 'Herbert Hoover',
            'last_name'     => 'Hoover',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'franklin-d-roosevelt',
            'display_name'  => 'Franklin D Roosevelt',
            'last_name'     => 'Roosevelt',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'harry-s-truman',
            'display_name'  => 'Harry S Truman',
            'last_name'     => 'Truman',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'dwight-d-eisenhower',
            'display_name'  => 'Dwight D Eisenhower',
            'last_name'     => 'Eisenhower',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'john-f-kennedy',
            'display_name'  => 'John F Kennedy',
            'last_name'     => 'Kennedy',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'lyndon-b-johnson',
            'display_name'  => 'Lyndon B Johnson',
            'last_name'     => 'Johnson',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'richard-nixon',
            'display_name'  => 'Richard Nixon',
            'last_name'     => 'Nixon',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'gerald-ford',
            'display_name'  => 'Gerald Ford',
            'last_name'     => 'Ford',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'james-carter',
            'display_name'  => 'James Carter',
            'last_name'     => 'Carter',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'ronald-reagan',
            'display_name'  => 'Ronald Reagan',
            'last_name'     => 'Reagan',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'george-bush',
            'display_name'  => 'George Bush',
            'last_name'     => 'Bush',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'bill-clinton',
            'display_name'  => 'Bill Clinton',
            'last_name'     => 'Clinton',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'george-w-bush',
            'display_name'  => 'George W Bush',
            'last_name'     => 'Bush',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'barack-obama',
            'display_name'  => 'Barack Obama',
            'last_name'     => 'Obama',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'donald-trump',
            'display_name'  => 'Donald Trump',
            'last_name'     => 'Trump',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'adam-smith',
            'display_name'  => 'Adam Smith',
            'last_name'     => 'Smith',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'thomas-paine',
            'display_name'  => 'Thomas Paine',
            'last_name'     => 'Paine',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'alexander-hamilton',
            'display_name'  => 'Alexander Hamilton',
            'last_name'     => 'Hamilton',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'benjamin-franklin',
            'display_name'  => 'Benjamin Franklin',
            'last_name'     => 'Franklin',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'john-hancock',
            'display_name'  => 'John Hancock',
            'last_name'     => 'Hancock',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'john-jay',
            'display_name'  => 'John Jay',
            'last_name'     => 'Jay',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'john-marshall',
            'display_name'  => 'John Marshall',
            'last_name'     => 'Marshall',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'patrick-henry',
            'display_name'  => 'Patrick Henry',
            'last_name'     => 'Henry',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'edmund-burke',
            'display_name'  => 'Edmund Burke',
            'last_name'     => 'Burke',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'samuel-adams',
            'display_name'  => 'Samuel Adams',
            'last_name'     => 'Adams',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'john-locke',
            'display_name'  => 'John Locke',
            'last_name'     => 'Locke',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'volitare',
            'display_name'  => 'volitare',
            'last_name'     => 'Volitare',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'thomas-hobbes',
            'display_name'  => 'Thomas Hobbes',
            'last_name'     => 'Hobbes',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'montesquieu',
            'display_name'  => 'Montesquieu',
            'last_name'     => 'Montesquieu',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'jean-jacques-rousseau',
            'display_name'  => 'Jean Jacques Rousseau',
            'last_name'     => 'Rousseau',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'immanuel-kant',
            'display_name'  => 'Immanuel Kant',
            'last_name'     => 'Kant',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'karl-marx',
            'display_name'  => 'Karl Marx',
            'last_name'     => 'Marx',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'meriwether-lewis',
            'display_name'  => 'Meriwether Lewis',
            'last_name'     => 'Lexis',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'william-clark',
            'display_name'  => 'William Clark',
            'last_name'     => 'Clark',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'george-rogers-clark',
            'display_name'  => 'George Rogers Clark',
            'last_name'     => 'Clark',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'frederick-douglass',
            'display_name'  => 'Frederick Douglass',
            'last_name'     => 'Douglass',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'harriet-tubman',
            'display_name'  => 'Harriet Tubman',
            'last_name'     => 'Tubman',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'booker-t-washington',
            'display_name'  => 'Booker T Washington',
            'last_name'     => 'Washington',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'william-lloyd-garrison',
            'display_name'  => 'William Lloyd Garrison',
            'last_name'     => 'Garrison',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'jefferson-davis',
            'display_name'  => 'Jefferson Davis',
            'last_name'     => 'Davis',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'robert-e-lee',
            'display_name'  => 'Robert E Lee',
            'last_name'     => 'Lee',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'stonewall-jackson',
            'display_name'  => 'Stonewall Jackson',
            'last_name'     => 'Jackson',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'george-b-mcclellan',
            'display_name'  => 'George B McClellan',
            'last_name'     => 'McClellan',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'henry-clay',
            'display_name'  => 'Henry Clay',
            'last_name'     => 'Clay',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'stephen-f-foster',
            'display_name'  => 'Stephen F Foster',
            'last_name'     => 'Foster',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'daniel-boone',
            'display_name'  => 'Daniel Boone',
            'last_name'     => 'Boone',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'squire-boone',
            'display_name'  => 'Squire Boone',
            'last_name'     => 'Boone',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'davy-crockett',
            'display_name'  => 'Davy-Crockett',
            'last_name'     => 'Crockett',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'james-bowie',
            'display_name'  => 'James Bowie',
            'last_name'     => 'Bowie',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'martha-layne-collins',
            'display_name'  => 'Martha Layne Collins',
            'last_name'     => 'Collins',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'hilary-clinton',
            'display_name'  => 'Hilary Clinton',
            'last_name'     => 'Clinton',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'bernie-sanders',
            'display_name'  => 'Bernie Sanders',
            'last_name'     => 'Sanders',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'alexander-graham-bell',
            'display_name'  => 'Alexander Graham Bell',
            'last_name'     => 'Bell',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'isaac-newton',
            'display_name'  => 'Isacc Newton',
            'last_name'     => 'Newton',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'william-randolph-hearst',
            'display_name'  => 'William Randolph Hearst',
            'last_name'     => 'Hearst',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'noah-webster',
            'display_name'  => 'Noah Webster',
            'last_name'     => 'Webster',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'oliver-wendell-holmes',
            'display_name'  => 'Oliver Wendell Holmes Jr',
            'last_name'     => 'Holmes',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'oscar-wilde',
            'display_name'  => 'Oscar Wilde',
            'last_name'     => 'Wilde',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'ralph-waldo-emerson',
            'display_name'  => 'Ralph Waldo Emerson',
            'last_name'     => 'Emerson',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'ernest-hemingway',
            'display_name'  => 'Ernest Hemingway',
            'last_name'     => 'Hemingway',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'herman-melville',
            'display_name'  => 'Herman Melville',
            'last_name'     => 'Melville',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'j-d-salinger',
            'display_name'  => 'J D Salinger',
            'last_name'     => 'Salinger',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'william-faulkner',
            'display_name'  => 'William Faulkner',
            'last_name'     => 'Faulkner',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'f-scott-fitzgerald',
            'display_name'  => 'F Scott Fitzgerald',
            'last_name'     => 'Fitzgerald',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('authors')->insert([
            'slug'          => 'harper-lee',
            'display_name'  => 'Harper Lee',
            'last_name'     => 'Lee',
            'bio_line'      => null,
            'profile_pic'   => null,
            'cover_image'   => null,
            'active'        => 1,
            'created_by'    => 1,
            'updated_by'    => 2,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        
        
        
        
        
        
        
    }
}
