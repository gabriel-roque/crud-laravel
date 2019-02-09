<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargo_clientes')->insert([
            [
                'id' => 1,
                'nome_cargo' => 'Gerente de Projetos',
                'created_at'=> date("Y-m-d H:i:s"),
                'updated_at'=> date("Y-m-d H:i:s")
            ],
            [
                'id' => 2,
                'nome_cargo' => 'Arquitero Senior',
                'created_at'=> date("Y-m-d H:i:s"),
                'updated_at'=> date("Y-m-d H:i:s")
            ],
            [
                'id' => 3,
                'nome_cargo' => 'Programador',
                'created_at'=> date("Y-m-d H:i:s"),
                'updated_at'=> date("Y-m-d H:i:s")
            ],
        ]);
    }
}
