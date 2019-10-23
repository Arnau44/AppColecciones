<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTable::class);
         $this->call(CategoriesSeeder::class);
         $this->call(CollectionSeeder::class);
         $this->call(ItemSeeder::class);
         $this->call(CommentsSeeder::class);
    }
}
