<?php

use App\Models\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Constructor de consultas */
        // DB::table('professions')->insert(['title' => 'Desarrollador back-end',]);
        // DB::table('professions')->insert(['title' => 'Desarrollador front-end',]);
        // DB::table('professions')->insert(['title' => 'Administrador de base de datos',]);

        /** ORM Eloquent */
        Profession::create(['title' => 'Desarrollador back-end']);
        Profession::create(['title' => 'Desarrollador front-end']);
        Profession::create(['title' => 'Administrador de base de datos']);
    }
}
