<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
class VeiculosController extends Controller
{
    
    public function index()
    {
        $veiculos = Veiculo::get();
        return view('admin.veiculos.indexVeiculo', compact('veiculos'));
    }

    
    public function create()
    {
        return view('admin.veiculos.createVeiculo');
        
    }

    
    public function store(Request $request)
    {
        $clientes= Veiculo::create($request->all());
        return redirect()
        ->route('veiculos.index')
        ->with('message','Alterado com Sucesso!');
    }

    
    public function show($id)
    {
        $veiculos= Veiculo::find($id);
        return view('admin.veiculos.showVeiculo',compact('veiculos'));
    }

    public function edit($id)
    {
        $veiculos= Veiculo::find($id);
        return view('admin.veiculos.editVeiculo',compact('veiculos'));
    }

    public function update(Request $request, $id)
    {
        $veiculos= Veiculo::find($id);
        if(!$veiculos){
            return redirect()->back();
        }
        $veiculos->update($request->all());
        return redirect()
        ->route('veiculos.index')
        ->with('message','Alterado com Sucesso!');
    }


    public function destroy($id)
    {
        $veiculos= Veiculo::find($id);
        $veiculos->delete();
        return redirect()->route('veiculos.index');
    }
}
