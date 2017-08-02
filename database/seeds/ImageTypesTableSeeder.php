<?php

use Illuminate\Database\Seeder;

class ImageTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('image_types')->insert([
            'slug'          => 'headshot',
            'title'         => 'Author Headshot',
            'description'   => 'Upload many for authors so can have variety of author\'s face in graphics, and different avatar & cover.',
            'width'         => NULL,
            'height'        => NULL,
            'directory'     => 'tipoff',
            'path'          => 'authors/headshot',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('image_types')->insert([
            'slug'          => 'depiction',
            'title'         => 'Author Depiction',
            'description'   => 'Artistic rendering of a headshot.',
            'width'         => NULL,
            'height'        => NULL,
            'directory'     => 'tipoff',
            'path'          => 'authors/depiction',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('image_types')->insert([
            'slug'          => 'caricature',
            'title'         => 'Author Caricature',
            'description'   => 'Cartoonish or comic imitation of the author to be used in graphics.',
            'width'         => NULL,
            'height'        => NULL,
            'directory'     => 'tipoff',
            'path'          => 'authors/caricature',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('image_types')->insert([
            'slug'          => 'avatar',
            'title'         => 'Author Avatar',
            'description'   => 'Ideally the Author Avatar is from a different headshot than the Author Cover. It is made from a headshot.',
            'width'         => 500,
            'height'        => 500,
            'directory'     => 'tipoff',
            'path'          => 'authors/profile',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('image_types')->insert([
            'slug'          => 'cover',
            'title'         => 'Author Cover',
            'description'   => 'Ideally the Author Cover is from a different headshot than the Author Avatar. It is made from a depiction, which is made from a headshot.',
            'width'         => NULL,
            'height'        => NULL,
            'directory'     => 'tipoff',
            'path'          => 'authors/cover',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('image_types')->insert([
            'slug'          => 'instagram-quotes-basic',
            'title'         => 'Quote Instagram Basic',
            'description'   => 'Basic graphics without author depictions created for sharing a quote on instagram.',
            'width'         => 1080,
            'height'        => 1080,
            'directory'     => 'graphics',
            'path'          => 'quotes/instagram',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
    }
}
