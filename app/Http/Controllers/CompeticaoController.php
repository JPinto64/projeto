<?php

namespace App\Http\Controllers;

use App\Models\Competicao;
use Illuminate\Http\Request;

class CompeticaoController extends Controller
{
    public function index()
    {
        $competicoes = Competicao::all();
        return view('competicoes.index', compact('competicoes'));
    }
    
    public function create()
    {
        return view('competicoes.create');
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'data' => 'required|date',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_termino' => 'required|date_format:H:i|after:hora_inicio',
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'local' => 'required|string|max:255',
            'numero_maximo_participantes' => 'required|integer|min:2|max:500',
            'estado' => 'required|string|in:Adiada,Pendente,Cancelada,Ativa',
            'escaloes.*' => 'nullable|string|in:A,B,C,D',
            'premiacao' => 'nullable|string',
            'observacoes' => 'nullable|string',
        ]);
        
        
        // Converte os checkboxes do escalao em string
        $data['escaloes'] = implode(',', $request->input('escaloes', [])); 
        
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $imagemPath = $imagem->store('imagens_competicoes', 'public');
            $data['imagem'] = $imagemPath;
        }
        
        $competicao = Competicao::create($data);
        
        return redirect()->route('competicoes.edit', $competicao->id)
        ->with('success', 'Competição criada com successo.');
    }
    
    public function edit(Competicao $competicao)
    {
        return view('competicoes.edit', compact('competicao'));
    }
    
    public function update(Request $request, Competicao $competicao)
    {
        //dd($request);
        $data = $request->validate([
            'data' => 'required|date',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_termino' => 'required|date_format:H:i|after:hora_inicio',
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'local' => 'required|string|max:255',
            'numero_maximo_participantes' => 'required|integer|min:2|max:500',
            'estado' => 'required|string|in:Adiada,Pendente,Cancelada,Ativa',
            'escaloes.*' => 'nullable|string|in:A,B,C,D',
            'premiacao' => 'nullable|string',
            'observacoes' => 'nullable|string',
        ]);
        
        // Converte os checkboxes d escalao em string
        $data['escaloes'] = implode(',', $request->input('escaloes', [])); 
        $competicao->update($data);
        
        if ($request->hasFile('imagem')) {
            $image = $request->file('imagem');
            $imagePath = $image->store('imagens_competicoes', 'public');
            $competicao->imagem = $imagePath;
            $competicao->save();
        }
        
        
        return redirect()->route('competicoes.edit', $competicao->id)
        ->with('success', 'Competição criada com successo.');
    }
    
    public function destroy(Competicao $competicao)
    {
        $competicao->delete();
        
        return redirect()->route('competicoes.index')
        ->with('success', 'Competição removida com successo.');
    }
}
