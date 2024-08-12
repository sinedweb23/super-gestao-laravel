<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        //utilizando o metodo create com fillable
        Fornecedor::create([
            'nome' => 'Fornecedor200',
            'site'=> 'fornecedor200.com.br',
            'uf'=> 'RS',
            'email'=> 'contato@fornecedor200.com.br'
        ]);

        //insert
        DB:table('fornecedores')->insert([
            'nome' => 'Fornecedor300',
            'site'=> 'fornecedor300.com.br',
            'uf'=> 'sS',
            'email'=> 'contato@fornecedor300.com.br'
        ]);
    }
}
