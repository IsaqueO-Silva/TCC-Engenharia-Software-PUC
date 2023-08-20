<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $connection   = 'mysql';
    protected $table        = 'produtos';

    public static function list() {
        return self::select(array(
            'id_produto',
            'nome'
        ))->get();
    }
}
