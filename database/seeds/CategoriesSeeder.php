<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Juegos de Mesa',
            'description' => 'Descripción de Juegos de Mesa',
            
        ]);
        DB::table('categories')->insert([
            'name' => 'Juegos de Mesa',
            'description' => 'Descripción de Juegos de Mesa',
            
        ]);
        DB::table('categories')->insert([
            'name' => 'Juegos de Cartas',
            'description' => 'Descripción de Juegos de Cartas',
            
        ]);
        DB::table('categories')->insert([
            'name' => 'VideoConsolas',
            'description' => 'Descripción de Videoconsolas',
            
        ]);
        DB::table('categories')->insert([
            'name' => 'Comics',
            'description' => 'Descripción de Comics',
        ]);

        DB::table('categories')->insert([
            'name' => 'Figuras',
            'description' => 'Descripción de Figuras coleccionables',
        ]);
    }

    //Juegos de Mesa, cartas, videojuegos, figuras, vinilos, comics
}
