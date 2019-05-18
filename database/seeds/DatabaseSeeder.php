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

        $this->truncateTables([
            'roles',
            'users',
            'questions',
            'answers'
        ]);

        $this->call(rolesSeeder::class);
        $this->call(usersSeeder::class);
        $this->call(questionSeeder::class);
        $this->call(answersSeeder::class);
    }

    public function truncateTables(array $tables){

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $key => $value) {
            DB::table($value)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
