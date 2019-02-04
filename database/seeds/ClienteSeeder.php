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
            'carga'=> 30,
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);

        DB::table('clientes')->insert([
            'nome'=> 'Marcos',
            'estado'=> 'GO',
            'carga'=> 45,
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);

        DB::table('clientes')->insert([
            'nome'=> 'Rafael',
            'estado'=> 'MG',
            'carga'=> 40,
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);
    }
}
