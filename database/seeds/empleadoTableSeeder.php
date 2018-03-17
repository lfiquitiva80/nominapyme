<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class empleadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

    	for ($i=0; $i < 1000; $i++) { 
    		
    	
        DB::table('empleado')->insert([
            'users_id' => 1,
            'tipodocumento_id' => 1,
            'NoDocumento' => $faker->randomNumber($nbDigits = NULL, $strict = false),
            'Fecha_Nacimiento' => $faker->dateTime($max = 'now', $timezone = null),
            'Nombres' => $faker->name,
            'Apellidos' => $faker->lastName,
            'nivel_educativo_id' => 1,
            'Profesion_id' => 1,
            'Direccion_casa' => $faker->address,
            'Telefono_casa' => $faker->phoneNumber,
            'NoCelular' => $faker->e164PhoneNumber,
            'email_empleado' => $faker->freeEmail,
            'Genero' => 1,
            'estado_civil_id' => 1,
            'cargo_id' => 1,
            'sede_id' => 1,
            'departamento_id' => 1,
            'Tipo_empleado_id' => 1,
            'forma_pago_id' => 1,
            'banco_id' => 1,
            'estado_trabajador_id' => 1,

            
        ]);

        }
    }
}
