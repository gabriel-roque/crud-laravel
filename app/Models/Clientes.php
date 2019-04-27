<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static paginate(int $int)
 */
class Clientes extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['nome', 'estado', 'carga'];


    static function listarClientes()
    {
        return Clientes::select('clientes.id', 'nome', 'estado', 'carga', 'cargo_id', 'nome_cargo')
            ->whereNull('clientes.deleted_at')
            ->join('cargo_clientes', 'cargo_id', '=', 'cargo_clientes.id')->paginate(3);

    }

}
