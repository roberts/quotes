<?php

use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('topics')->insert([
            'slug'          => 'business-leadership',
            'title'         => 'Business & Leadership',
            'description'   => 'For most broad business and leadership topic.',
            'business'      => 1,
            'leadership'    => 1,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('topics')->insert([
            'slug'          => 'business',
            'title'         => 'Business',
            'description'   => 'For broad business topic.',
            'business'      => 1,
            'leadership'    => 0,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        DB::table('topics')->insert([
            'slug'          => 'leadership',
            'title'         => 'Leadership',
            'description'   => 'For broad leadership topic.',
            'business'      => 0,
            'leadership'    => 1,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);

    }
}
