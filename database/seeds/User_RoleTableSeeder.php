<?php

use Illuminate\Database\Seeder;

class User_RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drewroberts_id = DB::table('users')
                                ->select('id')
                                ->where('username', 'drewroberts')
                                ->first()
                                ->id;
        $shay_id = DB::table('users')
                                ->select('id')
                                ->where('username', 'shay')
                                ->first()
                                ->id;
        $granny_id = DB::table('users')
                                ->select('id')
                                ->where('username', 'granny')
                                ->first()
                                ->id;
        $grandmom_id = DB::table('users')
                                ->select('id')
                                ->where('username', 'grandmom')
                                ->first()
                                ->id;
        $davidyetty_id = DB::table('users')
                                ->select('id')
                                ->where('username', 'davidyetty')
                                ->first()
                                ->id;
                                
        $admin_role = DB::table('roles')
                                ->select('id')
                                ->where('slug', 'admin')
                                ->first()
                                ->id;
        $designers_role = DB::table('roles')
                                ->select('id')
                                ->where('slug', 'designers')
                                ->first()
                                ->id;
        $quotes_role = DB::table('roles')
                                ->select('id')
                                ->where('slug', 'quotes-editor')
                                ->first()
                                ->id;
        $books_role  = DB::table('roles')
                                ->select('id')
                                ->where('slug', 'books-editor')
                                ->first()
                                ->id;

        $now = date('Y-m-d H:i:s');
        
        DB::table('user_role')->insert([
            'user_id'    => $drewroberts_id,
            'role_id'    => $admin_role,
            'created_at' => $now,
        ]);
        
        DB::table('user_role')->insert([
            'user_id'    => $shay_id,
            'role_id'    => $quotes_role,
            'created_at' => $now,
        ]);
        
        DB::table('user_role')->insert([
            'user_id'    => $shay_id,
            'role_id'    => $books_role,
            'created_at' => $now,
        ]);
        
        DB::table('user_role')->insert([
            'user_id'    => $granny_id,
            'role_id'    => $quotes_role,
            'created_at' => $now,
        ]);
        
        DB::table('user_role')->insert([
            'user_id'    => $granny_id,
            'role_id'    => $books_role,
            'created_at' => $now,
        ]);
        
        DB::table('user_role')->insert([
            'user_id'    => $grandmom_id,
            'role_id'    => $quotes_role,
            'created_at' => $now,
        ]);
        
        DB::table('user_role')->insert([
            'user_id'    => $grandmom_id,
            'role_id'    => $books_role,
            'created_at' => $now,
        ]);
        
        DB::table('user_role')->insert([
            'user_id'    => $davidyetty_id,
            'role_id'    => $designers_role,
            'created_at' => $now,
        ]);
        
        DB::table('user_role')->insert([
            'user_id'    => $davidyetty_id,
            'role_id'    => $quotes_role,
            'created_at' => $now,
        ]);
        
        DB::table('user_role')->insert([
            'user_id'    => $davidyetty_id,
            'role_id'    => $books_role,
            'created_at' => $now,
        ]);
        
    }
}
