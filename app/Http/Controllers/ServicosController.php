<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;
use App\Models\Servicos;

class ServicosController extends Controller
{
    public function index()
    {
        $servicos = Servicos::get();
        return view('admin.servicos.indexServico', compact('servicos'));
    }

    
    public function create()
    {
        return view('admin.servicos.createServico');
        
    }

    
    public function store(Request $request)
    {
        $clientes= Servicos::create($request->all());
        return redirect()
        ->route('servicos.index')
        ->with('message','Alterado com Sucesso!');
    }

    
    public function show($id)
    {
        $servicos= Servicos::find($id);
        return view('admin.servicos.showServico',compact('servicos'));
    }

    public function edit($id)
    {
        $servicos= Servicos::find($id);
        return view('admin.servicos.editServico',compact('servicos'));
    }

    public function update(Request $request, $id)
    {
        $servicos= Servicos::find($id);
        if(!$servicos){
            return redirect()->back();
        }
        $servicos->update($request->all());
        return redirect()
        ->route('servicos.index')
        ->with('message','Alterado com Sucesso!');
    }


    public function destroy($id)
    {
        $servicos= Servicos::find($id);
        $servicos->delete();
        return redirect()->route('servicos.index');
    }
}
