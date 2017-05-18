<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        
        DB::table('users')->insert([
            'username'      => 'drewroberts',
            'email'         => 'drew@roberts.email',
            'first_name'    => 'Drew',
            'last_name'     => 'Roberts',
            'display_name'  => 'Drew Roberts',
            'tagline'       => 'Founder of the Tipoff Project',
            'password'      => bcrypt('password'),
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('users')->insert([
            'username'      => 'shay',
            'email'         => 'shay@drewandshay.com',
            'first_name'    => 'Shay',
            'last_name'     => 'Roberts',
            'display_name'  => 'Shay Roberts',
            'tagline'       => 'Tipoff Project Enthusiast',
            'password'      => bcrypt('password'),
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('users')->insert([
            'username'      => 'granny',
            'email'         => 'kentuckyroots38@gmail.com',
            'first_name'    => 'Marty',
            'last_name'     => 'Wright',
            'display_name'  => 'Granny',
            'tagline'       => 'Tipoff Project Enthusiast',
            'password'      => bcrypt('password'),
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('users')->insert([
            'username'      => 'grandmom',
            'email'         => 'mlfarmer720@yahoo.com',
            'first_name'    => 'Mary Lloyd',
            'last_name'     => 'Farmer',
            'display_name'  => 'Grandmom',
            'tagline'       => 'Tipoff Project Enthusiast',
            'password'      => bcrypt('password'),
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
        
        DB::table('users')->insert([
            'username'      => 'davidyetty',
            'email'         => 'davidyetty@gmail.com',
            'first_name'    => 'David',
            'last_name'     => 'Ytterberg',
            'display_name'  => 'David Ytterberg',
            'tagline'       => 'Tipoff Project Branding Authority',
            'password'      => bcrypt('password'),
            'created_at'    => $now,
            'updated_at'    => $now,
        ]);
    }
}
