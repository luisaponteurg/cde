<?php

use Illuminate\Database\Seeder;
use App\Type_lapse;

class TypeLapseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	 $tls = [
        	'PREINSCRIPCIONES',
        	'INSCRIPCIONES',
        	'ADICIÓN Y RETIRO',
        	'REGULAR',
        	'INTENSIVO',
        	'RECUPERATIVOS',
        	'INTEGRALES',
        	'MIGRADO',
        	'ÁREA DE HUMANIDADES, LETRAS Y ARTES',
        	'ÁREA DE CIENCIAS VETERINARIAS',
        ];

        foreach ($tls as $key => $value) {
        	$tl = Type_lapse::create([
        		'description'	=>	$value,
        	]);
        }

    }
}
