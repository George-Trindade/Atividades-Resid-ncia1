<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::get();
        return view('admin.clientes.indexCliente', compact('clientes'));
    }
    
    public function create()
    {
        return view('admin.clientes.createCliente');
    }

    public function store(Request $request)
    {
        
        $clientes= Cliente::create($request->all());
        return redirect()
        ->route('clientes.index')
        ->with('message','Alterado com Sucesso!');
    }

   
    public function show($id)
    {
        $clientes= Cliente::find($id);
        return view('admin.clientes.showCliente',compact('clientes'));
    }

    
    public function edit($id)
    {
        $clientes= Cliente::find($id);
        return view('admin.clientes.editCliente',compact('clientes'));
    }

    
    public function update(Request $request, $id)
    {
        $clientes= Cliente::find($id);
        if(!$clientes){
            return redirect()->back();
        }
        $clientes->update($request->all());
        return redirect()
        ->route('clientes.index')
        ->with('message','Alterado com Sucesso!');
    }

   
    public function destroy($id)
    {
        $clientes = Cliente::find($id);
        $clientes->delete();
        return redirect()->route('clientes.index');
    }
}
