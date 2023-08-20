<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    protected $connection   = 'mysql';
    protected $table        = 'fornecedores';

    public static function list() {
        return self::select(array(
            'id_fornecedor',
            'nome_fantasia'
        ))->get();
    }
}
