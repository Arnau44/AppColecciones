<?php

use Illuminate\Database\Seeder;

class LoveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i<50; $i++){

            DB::table('collections_users')->insert([
                'user_id' => App\User::all()->random()->id,
                'collection_id' => App\Collection::all()->random()->id,
                
            ]);
        }
    }
}
