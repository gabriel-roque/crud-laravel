<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteFormRequest;
use App\Models\Carga;
use App\Models\CargoCliente;
use App\Models\Clientes;
use App\Models\Estado;
use Illuminate\Http\Request;

class CrudController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crud.index',[
            'clientes' => Clientes::listarClientes(),
            'title' => 'CRUD | Dashboard'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create', [
            'estados' => Estado::all(),
            'cargas' => Carga::all(),
            'cargos' => CargoCliente::all(),
            'title' => 'CRUD | Create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteFormRequest $request)
    {
        if(Clientes::armazenarCliente($request)){
            return redirect('/');
        }else{
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('crud.edit', [
            'estados' => Estado::all(),
            'cargas' => Carga::all(),
            'cargos' => CargoCliente::all(),
            'registro' => Clientes::find($id),
            'title' => 'CRUD | Edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteFormRequest $request, $id)
    {
        if (Clientes::atualizarCliente($request, $id)){
            return redirect('/');
        }else{
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $cliente = Clientes::find($id);
       if (isset($cliente)){
           $cliente->delete($id);
           return redirect('/');
       }else{
           return redirect('/');
       }
    }
}
