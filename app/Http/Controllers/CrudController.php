<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
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

        $clientes = DB::table('clientes')->get();

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
        $estados = DB::table('estados')->get();
        $cargas = DB::table('carga')->get();

        $title = 'CRUD | Create';
        return view('crud.create', compact('title', 'estados', 'cargas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recupera todos os campos exeto o do token CSRF
        $dataform = $request->except('_token');

        DB::table('clientes')->insert($dataform);

        return redirect('/');
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
        $estados = DB::table('estados')->get();
        $cargas = DB::table('carga')->get();

//        $registro = $this->cliente->find($id);
        $registro = DB::table('clientes')->find($id);

        return view('crud.edit', compact('title', 'estados', 'cargas', 'registro'));
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
        $data = $request->except('_token', '_method');

        DB::table('clientes')->where('id', $id)->update($data);

        return redirect('/');
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
