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
            'title'         => 'Author Headshots',
            'description'   => 'Upload many for authors so can have variety of author\'s face in graphics, and different avatar & cover.',
            'width'         => NULL,
            'height'        => NULL,
            'directory'     => 'tipoff',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
    }
}
