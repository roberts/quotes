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
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('image_types')->insert([
            'slug'          => 'instagram-quotes',
            'title'         => 'Quote Instagram',
            'description'   => 'Graphic created for sharing a quote on instagram.',
            'width'         => 1080,
            'height'        => 1080,
            'directory'     => 'graphics',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
    }
}
