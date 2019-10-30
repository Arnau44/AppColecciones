<?php

use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        for ($i = 1; $i<=50; $i++){

            DB::table('collections')->insert([
                'name' => 'Collection del user',
                'description' => 'descripcio de una collection del root',
                'user_id' => 1,
                'category_id' => App\Category::all()->random()->id
            ]);
        }

        factory(App\Collection::class, 100)->create();
    }
}
