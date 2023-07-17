<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Cobranca;
use Illuminate\Http\Request;

class CobrancaController extends Controller
{
    public function index()
    {
        $cobrancas = Cobranca::all();
        
        return view('cobrancas.index', compact('cobrancas'));
    }
    
    public function create()
    {
        $alunos = Aluno::all();
        
        return view('cobrancas.create', compact('alunos'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'data_cobranca' => 'required|date',
            'data_limite' => 'nullable|date',
            'data_pagamento' => 'nullable|date',
            'montante' => 'required|numeric',
            'multa' => 'nullable|numeric',
            'iva' => 'required|numeric',
            'descricao' => 'required|string',
            'modo_pagamento' => 'required|string',
            'estado' => 'required|string',
        ]);
        
        $ultimaReferencia = Cobranca::max('referencia');
        $proximaReferencia = str_pad((intval($ultimaReferencia) + 1), 9, '0', STR_PAD_LEFT);
        
        $requestData = $request->all();
        $requestData['referencia'] = $proximaReferencia;
        
       $cobranca = Cobranca::create($requestData);

        return redirect()->route('cobrancas.edit', $cobranca->id)
        ->with('success', 'Cobrança criada com successo.');
    }
    
    public function edit(Cobranca $cobranca)
    {
        $alunos = Aluno::all();
        
        return view('cobrancas.edit', compact('cobranca', 'alunos'));
    }
    
    public function update(Request $request, Cobranca $cobranca)
    {
        $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'data_cobranca' => 'required|date',
            'data_limite' => 'nullable|date',
            'data_pagamento' => 'nullable|date',
            'montante' => 'required|numeric',
            'multa' => 'nullable|numeric',
            'iva' => 'required|numeric',
            'descricao' => 'required|string',
            'referencia' => 'required|string|max:9',
            'modo_pagamento' => 'required|string',
            'estado' => 'required|string',
        ]);
        
        $cobranca->update($request->all());
        
        return redirect()->route('cobrancas.edit', $cobranca->id)
        ->with('success', 'Cobrança atualizada com sucesso.');
    }
    
    public function destroy(Cobranca $cobranca)
    {
        $cobranca->delete();
        
        return redirect()->route('cobrancas.index')
        ->with('success', 'Cobrança deleted successfully.');
    }
}
