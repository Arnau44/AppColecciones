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
            'name' => 'Funkos',
            'description' => 'Descripción de Funkos',
            'icon' => 'https://image.flaticon.com/icons/svg/82/82378.svg'

        ]);
        DB::table('categories')->insert([
            'name' => 'Juegos de Mesa',
            'description' => 'Descripción de Juegos de Mesa',
            'icon' => 'https://image.flaticon.com/icons/svg/2094/2094324.svg'

        ]);
        DB::table('categories')->insert([
            'name' => 'Vinil',
            'description' => 'Descripción Vinil',
            'icon' => 'https://image.flaticon.com/icons/svg/2095/2095247.svg'

        ]);
        DB::table('categories')->insert([
            'name' => 'Juegos de Cartas',
            'description' => 'Descripción de Juegos de Cartas',
            'icon' => 'https://image.flaticon.com/icons/svg/181/181894.svg'

        ]);
        DB::table('categories')->insert([
            'name' => 'VideoConsolas',
            'description' => 'Descripción de Videoconsolas',
            'icon' => 'https://image.flaticon.com/icons/svg/79/79669.svg'

        ]);
        DB::table('categories')->insert([
            'name' => 'Moneda',
            'description' => 'Descripción de Monedas',
            'icon' => 'https://image.flaticon.com/icons/svg/858/858151.svg'

        ]);
        DB::table('categories')->insert([
            'name' => 'Comics',
            'description' => 'Descripción de Comics',
            'icon' => 'https://image.flaticon.com/icons/svg/626/626508.svg'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sellos',
            'description' => 'Descripción de Sellos',
            'icon' => 'https://image.flaticon.com/icons/svg/72/72755.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Vintage Vehicle',
            'description' => 'Descripción de Vintage Vehicles',
            'icon' => 'https://www.flaticon.com/premium-icon/icons/svg/2081/2081799.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Other',
            'description' => 'Other things',
            'icon' => 'https://image.flaticon.com/icons/svg/66/66892.svg'
        ]);
    }

    //Juegos de Mesa, cartas, videojuegos, figuras, vinilos, comics
}
