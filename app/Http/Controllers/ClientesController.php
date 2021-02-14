<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Item;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		$orderBy = $request->isMethod('get') && $request->input('orderBy') ? explode("|",$request->input('orderBy')) : array('nome','asc');		
        $Clientes = Cliente::orderBy($orderBy[0],$orderBy[1])->get();
		
		$Clientes->orderByOptions = array(
			'nome' 		=> $orderBy[0] == 'nome' 		&& $orderBy[1] == 'asc' ? 'nome|desc' 		: 'nome|asc',
			'telefone' 	=> $orderBy[0] == 'telefone' 	&& $orderBy[1] == 'asc' ? 'telefone|desc' 	: 'telefone|asc',
			'documento' => $orderBy[0] == 'documento' 	&& $orderBy[1] == 'asc' ? 'documento|desc' 	: 'documento|asc',
			'municipio' => $orderBy[0] == 'municipio' 	&& $orderBy[1] == 'asc' ? 'municipio|desc' 	: 'municipio|asc',
			'uf' 		=> $orderBy[0] == 'uf' 			&& $orderBy[1] == 'asc' ? 'uf|desc' 		: 'uf|asc'
		);
		
		return view('clientes.index')->with('Clientes',$Clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
			'nome' 		=> 'required',
			'telefone' 	=> 'required|max:20',
			'documento' => 'required|max:20',
			'uf' 		=> 'max:2',
			'cep' 		=> 'max:9',
		]);
		
		$Cliente = new Cliente;
		$Cliente->nome 			= $request->input('nome');
		$Cliente->telefone 		= $request->input('telefone');
		$Cliente->documento 	= $request->input('documento');
		$Cliente->municipio 	= $request->input('municipio');
		$Cliente->uf 			= $request->input('uf');
		$Cliente->cep 			= $request->input('cep');
		$Cliente->rua 			= $request->input('rua');
		$Cliente->complemento 	= $request->input('complemento');
		$Cliente->save();
		
		return redirect('/clientes')->with('success', 'Novo Cliente adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$Cliente = Cliente::find($id);
		$Cliente->Itens = $Cliente->findItens();
		
		return view('clientes.show')->with('Cliente',$Cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Cliente = Cliente::find($id);
		return view('clientes.edit')->with('Cliente',$Cliente);
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
        $this->validate($request,[
			'nome' 		=> 'required',
			'telefone' 	=> 'required|max:20',
			'documento' => 'required|max:20',
			'uf' 		=> 'max:2',
			'cep' 		=> 'max:9',
		]);
		
		$Cliente = Cliente::find($id);
		$Cliente->nome 			= $request->input('nome');
		$Cliente->telefone 		= $request->input('telefone');
		$Cliente->documento 	= $request->input('documento');
		$Cliente->municipio 	= $request->input('municipio');
		$Cliente->uf 			= $request->input('uf');
		$Cliente->cep 			= $request->input('cep');
		$Cliente->rua 			= $request->input('rua');
		$Cliente->complemento 	= $request->input('complemento');
		$Cliente->save();
		
		return redirect('/clientes')->with('success', "{$Cliente->nome} editado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$Cliente = Cliente::find($id);
		$Cliente->delete();
        return redirect('/clientes')->with('success', "{$Cliente->nome} deletado com sucesso!");
    }
}
