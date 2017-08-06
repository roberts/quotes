<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds. -DR
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(User_RoleTableSeeder::class);
        $this->call(AuthorsTableSeeder::class);
        $this->call(AuthorDetailsTableSeeder::class);
        $this->call(QuotesTableSeeder::class);
        $this->call(Book_ContributionsTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(CollectionsTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
        $this->call(CirclesTableSeeder::class);
        $this->call(ImageTypesTableSeeder::class);
        $this->call(GraphicsTableSeeder::class);
    }
}
