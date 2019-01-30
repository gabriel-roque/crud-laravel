<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nome'=> 'Gabriel',
            'estado'=> 'DF',
            'carga'=> 30
        ]);

        DB::table('clientes')->insert([
            'nome'=> 'Marcos',
            'estado'=> 'GO',
            'carga'=> 45
        ]);

        DB::table('clientes')->insert([
            'nome'=> 'Rafael',
            'estado'=> 'MG',
            'carga'=> 40
        ]);
    }
}