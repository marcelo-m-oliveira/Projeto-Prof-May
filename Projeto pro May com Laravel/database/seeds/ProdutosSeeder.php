<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProdutosSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('produtos')->insert([
            'nome' => "Coxinha",
            'descricao' => "A melhor do Brasil. Sabor: Frango",
            'valor' => 1.00,
            'imagem' => "imagens/100-salgados-fritos-para-festa.jpg",
            'ativo' => "S",
        ]);

        DB::table('produtos')->insert([
            'nome' => "Pastelzinho",
            'descricao' => "Focado na crocância. Sabor: Carne",
            'valor' => 1.00,
            'imagem' => "imagens/pastelzinho.jpg",
            'ativo' => "S",
        ]);
    
        DB::table('produtos')->insert([
            'nome' => "Bolinho",
            'descricao' => "Maravilhoso puxa-puxa. Sabor: Queijo",
            'valor' => 1.00,
            'imagem' => "imagens/queijo.jpg",
            'ativo' => "S",
        ]);

        DB::table('produtos')->insert([
            'nome' => "Quibe",
            'descricao' => "Feito especialmente para veganos. Sabor: Bacalhau",
            'valor' => 1.00,
            'imagem' => "imagens/quibe-de-bacalhau.jpg",
            'ativo' => "S",
        ]);

        DB::table('produtos')->insert([
            'nome' => "Esfirra",
            'descricao' => "Melhor que a do Habbibs. Sabor: Carne Seca",
            'valor' => 1.00,
            'imagem' => "imagens/esfirra-aberta-de-carne-para-diabeticos.jpg",
            'ativo' => "S",
        ]);
    }
}
