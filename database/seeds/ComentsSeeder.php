<?php

use Illuminate\Database\Seeder;
class ComentsTable extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run ()
    {
        factory(App\Coments::class, 50)->create();
    }
}