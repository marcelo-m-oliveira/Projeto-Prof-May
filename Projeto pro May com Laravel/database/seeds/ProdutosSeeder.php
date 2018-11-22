<?php

use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'nome' => "Coxinha",
            'quantidade' => 500,
            'descricao' => "Frango",
            'imagem' => "",
            'preco' => 1.00,
            'id_categoria' => 1,
        ]);

        DB::table('produtos')->insert([
            'nome' => "Esfirra",
            'quantidade' => 500,
            'descricao' => "Calabresa",
            'imagem' => "",
            'preco' => 1.00,
            'id_categoria' => 1,
        ]);

        DB::table('produtos')->insert([
            'nome' => "Pastelzinho",
            'quantidade' => 500,
            'descricao' => "Carne",
            'imagem' => "",
            'preco' => 1.00,
            'id_categoria' => 1,
        ]);

        DB::table('produtos')->insert([
            'nome' => "Bolinho",
            'quantidade' => 500,
            'descricao' => "Queijo",
            'imagem' => "",
            'preco' => 1.00,
            'id_categoria' => 1,
        ]);
    }
}
