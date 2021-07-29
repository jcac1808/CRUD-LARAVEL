<?php

use App\Models\Profession;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Constructor de consultas */
        // // $professions=DB::table('professions')->select('id')->take(1)->get();
        // // dd($professions[0]->id);
        // // dd($professions->first()->id);

        // $profession=DB::table('professions')->select('id')->first();
        // // dd($profession->id);

        // DB::table('users')->insert([
        //     'name' => 'Juan Carlos Arias Cruz',
        //     'email' => 'jcariascruz.jcac@gmail.com',
        //     'password' => bcrypt('admin'),
        //     'profession_id' => $profession->id,
        // ]);

        /** ORM Eloquent */
        $profession=Profession::select('id')->first();
        User::create([
            'name' => 'Juan Carlos Arias Cruz',
            'email' => 'jcariascruz.jcac@gmail.com',
            'password' => bcrypt('admin'),
            'profession_id' => $profession->id,
        ]);

    }
}
