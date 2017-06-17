<?php

use Illuminate\Database\Seeder;

class CollectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('collections')->insert([
            'user_id'          => 1,
            'slug'          => 'featured',
            'title'         => 'Featured Content',
            'description'   => 'Featured content for Tipoff social media pushes.',
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
    }
}