<?php

use Illuminate\Database\Seeder;

class TitulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titulos')->insert([
            'data_vencimento' => '2016-08-14',
            'descricao' => 'APT 101',
            'status' => 'RECEBIDO',
            'valor' => 100
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2016-08-15',
            'descricao' => 'APT 102',
            'status' => 'PENDENTE',
            'valor' => 150
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2016-08-15',
            'descricao' => 'APT 103',
            'status' => 'RECEBIDO',
            'valor' => 125.5
        ]);
    }
}
