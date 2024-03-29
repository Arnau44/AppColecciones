<?php

use Illuminate\Database\Seeder;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'root',
            'email' => 'root@root.com',
            'password' => bcrypt('12345678'),
           // 'is_admin' => true
        ]);

        factory(App\User::class, 20)->create();
    }
}
