<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
use Illuminate\Support\Facades\Redirect;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente=cliente::orderBy('id','ASC')->paginate(10);
        return view('cliente.index',compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente=new cliente;
        $cliente->documento_identidad=$request->get('documento_identidad');
        $cliente->nombre=$request->get('nombre');
        $cliente->apellido=$request->get('apellido');
        $cliente->edad=$request->get('edad');
        $cliente->email=$request->get('email');
        $cliente->telefono=$request->get('telefono');
        $cliente->save();
        return Redirect::to('cliente');
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
        $cliente=cliente::findOrFail($id);
        return view("cliente.edit",["cliente"=>$cliente]);
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
        $cli=cliente::findOrFail($id);
        $cli->documento_identidad=$request->get('documento_identidad');
        $cli->nombre=$request->get('nombre');
        $cli->apellido=$request->get('apellido');
        $cli->edad=$request->get('edad');
        $cli->email=$request->get('email');
        $cli->telefono=$request->get('telefono');
        $cli->update();
        return Redirect::to('cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {    
        $cliente=cliente::findOrFail($id);
        $cliente->delete();
        return Redirect::to('cliente');
    }
}
