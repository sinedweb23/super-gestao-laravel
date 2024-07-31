<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){
        $fornecedores = [
            0 =>[
                'nome'=>'Fornecedor 1', 
                'status'=>'N',
                'cnpj' => '',
                'ddd' => '11', // são paulo
                'telefone'=> '5845454'
            ],

            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85', // fortaleza
                'telefone'=> '95665456'
            ],

            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32',//juiz de fora
                'telefone'=> '795665456'
            ]
        ];

      

        return view('site.fornecedor.index', compact('fornecedores'));
        

    }
}
