<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargaHorariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carga')->insert([
            ['horas'=>20],
            ['horas'=>30],
            ['horas'=>40]
        ]);
    }
}
