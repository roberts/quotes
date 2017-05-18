<?php

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('quotes')->insert([
            'author_id'     => 1,
            'quote_text'    => 'A big project is like a messy house, simply pick a corner and just get started.',
            'active'        => 1,
            'created_by'    => 1,
            'approved_by'   => 1,
            'updated_by'    => null,
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        
        
        
    }
}
