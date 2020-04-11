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
        // $this->call(UsersTableSeeder::class);
        factory(\App\User::class, 10)->create();
        factory(\App\sick::class, 10)->create();
        factory(\App\individuals::class, 10)->create();
        factory(\App\healthstatus::class, 10)->create();
        factory(\App\leave::class, 10)->create();
        factory(\App\medicalexaminations::class, 10)->create();
        factory(\App\places::class, 10)->create();
    }
}
