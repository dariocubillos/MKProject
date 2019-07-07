<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      DB::table('users')->insert([
            'id'=> '1',
            'name'=> 'admin',
            'email'=> 'admin@admin.com',
            'email_verified_at'=> date('2019-01-01 00:00:00'),
            'password'=> Hash::make('adminadmin'),
            'nino_adult'=> 'admin',
            'grado_subir' => '100',
            'grado_actual'=> '100',
            'edad'=> '100',
            'direccion'=> 'admin',
            'fecha_nacimiento'=> date('2019-01-01 00:00:00'),
            'telefono'=> '1234567890',
            'edo_civil'=> 'admin',
            'ocupacion_prof'=> 'admin',
            'fecha_examen_anterior'=> date('2019-01-01 00:00:00'),
            'fecha_ingreso'=> date('2019-01-01 00:00:00'),
            'practicando'=> 1,
            'doyang_que_pertenece'=> 'admin',
            'nombre_profesor'=> 'admin',

        ]);

    }
}
