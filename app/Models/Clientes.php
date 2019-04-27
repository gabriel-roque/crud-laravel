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
    protected $fillable = ['nome', 'estado', 'carga', 'cargo_id'];


    static function listarClientes()
    {
        return Clientes::select('clientes.id', 'nome', 'estado', 'carga', 'cargo_id', 'nome_cargo')
            ->whereNull('clientes.deleted_at')
            ->join('cargo_clientes', 'cargo_id', '=', 'cargo_clientes.id')->paginate(3);

    }

    static function armazenarCliente($request)
    {
        $data =[
            'nome' => request('nome'),
            'estado' => request('estado'),
            'carga' => request('carga'),
            'cargo_id' => request('cargo_id'),
        ];

        if($data){
            Clientes::create($data);
            return true;
        }else{
            return false;
        }
    }


}
