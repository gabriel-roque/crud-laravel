<?php

namespace App\Http\Controllers;

use App\Models\Carga;
use App\Models\CargoCliente;
use App\Models\Clientes;
use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    /**
     * CrudController constructor.
     */
    public function __construct(Clientes $clientes)
    {
        $this->cliente = $clientes;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientes = DB::table('clientes')
            ->select('clientes.id', 'nome', 'estado', 'carga', 'cargo_id', 'nome_cargo')
            ->whereNull('clientes.deleted_at')
            ->join('cargo_clientes', 'cargo_id', '=', 'cargo_clientes.id')
            ->get();


        $title = 'CRUD | Dashboard';
        return view('crud.index', compact('title', 'clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::all();
        $cargas = Carga::all();
        $cargos = CargoCliente::all();

        $title = 'CRUD | Create';
        return view('crud.create', compact('title', 'estados', 'cargas', 'cargos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Clientes();
        if (isset($cliente)){
            $cliente->nome = $request->input('nome');
            $cliente->estado = $request->input('estado');
            $cliente->carga = $request->input('carga');
            $cliente->cargo_id = $request->input('cargo_id');
            $cliente->save();
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
        $title = "CRUD | Edit";
        $estados = Estado::all();
        $cargas = Carga::all();
        $cargos = CargoCliente::all();

        $registro = Clientes::find($id);

        return view('crud.edit', compact('title', 'estados', 'cargas', 'registro', 'cargos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Clientes::find($id);
        if (isset($cliente)){
            $cliente->nome = $request->input('nome');
            $cliente->estado = $request->input('estado');
            $cliente->carga = $request->input('carga');
            $cliente->cargo_id = $request->input('cargo_id');
            $cliente->save();
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
        DB::table('clientes')->delete($id);

        return redirect('/');
    }
}
