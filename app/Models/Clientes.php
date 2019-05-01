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
        if($request){
            Clientes::create($request->all());
            return true;
        }else{
            return false;
        }
    }

    static function atualizarCliente($request, $id)
    {
        if($cliente = Clientes::find($id)){
            $cliente->nome = $request->input('nome');
            $cliente->estado = $request->input('estado');
            $cliente->carga = $request->input('carga');
            $cliente->cargo_id = $request->input('cargo_id');
            $cliente->save();
            return true;
        }else{
            return false;
        }
    }

    static function deletarCliente($id)
    {
        $cliente = Clientes::find($id);
        if ($cliente){
            $cliente->destroy($id);
            return true;
        }else{
            return false;
        }
    }
}
