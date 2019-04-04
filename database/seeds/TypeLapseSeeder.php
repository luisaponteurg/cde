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
        	'MIGRADO'
        ];

        foreach ($tls as $key => $value) {
        	$tl = Type_lapse::create([
        		'description'	=>	$value,
        	]);
        }

    }
}
