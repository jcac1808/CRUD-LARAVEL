<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // limpia los datos
        $this->truncateTables(['users', 'professions']);

        // Inserta los datos
        $this->call(ProfessionSeeder::class);
        $this->call(UserSeeder::class);
    }

    protected function truncateTables(array $tables)
    {
        //DB::statement('set foreign_key_checks = 0;');
        foreach ($tables as $table){
            DB::table($table)->truncate();
        }
        //DB::statement('set foreign_key_checks = 1;');
    }
}
