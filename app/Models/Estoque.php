<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    use HasFactory;
    protected $connection   = 'mysql';
    protected $table        = 'estoques';

    public static function list() {
        return self::select(array(
            'id_estoque',
            'nome'
        ))->get();
    }
}
