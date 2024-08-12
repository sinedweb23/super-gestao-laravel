<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory; // Adicione esta linha para usar o trait HasFactory

    // Define o nome da tabela no banco de dados
    protected $table = 'fornecedores';

    // Define os campos que podem ser preenchidos em massa
    protected $fillable = ['nome', 'site', 'uf', 'email'];
}
