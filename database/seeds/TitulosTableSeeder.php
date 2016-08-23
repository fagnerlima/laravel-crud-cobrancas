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

        DB::table('titulos')->insert([
            'data_vencimento' => '2016-08-17',
            'descricao' => 'APT 104',
            'status' => 'PENDENTE',
            'valor' => 100
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2016-08-17',
            'descricao' => 'APT 105',
            'status' => 'PENDENTE',
            'valor' => 150
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2016-08-18',
            'descricao' => 'APT 106',
            'status' => 'PENDENTE',
            'valor' => 125.5
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2016-08-21',
            'descricao' => 'APT 107',
            'status' => 'RECEBIDO',
            'valor' => 100
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2016-08-21',
            'descricao' => 'APT 108',
            'status' => 'PENDENTE',
            'valor' => 150
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2016-08-21',
            'descricao' => 'APT 109',
            'status' => 'RECEBIDO',
            'valor' => 125.5
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2016-08-22',
            'descricao' => 'APT 110',
            'status' => 'RECEBIDO',
            'valor' => 100
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2016-08-23',
            'descricao' => 'APT 111',
            'status' => 'PENDENTE',
            'valor' => 150
        ]);

        DB::table('titulos')->insert([
            'data_vencimento' => '2016-08-23',
            'descricao' => 'APT 112',
            'status' => 'PENDENTE',
            'valor' => 125.5
        ]);
    }
}
