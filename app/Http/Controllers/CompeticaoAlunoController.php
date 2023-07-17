<?php

namespace App\Http\Controllers;

use App\Models\CompeticaoAluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompeticaoAlunoController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        $competicoesAlunos = DB::select("SELECT
 
competicoesalunos.*
,CASE WHEN competicoesalunos.id IS NOT NULL THEN 1 ELSE 0 END AS reservada
,competicoes.id AS competicoes_id
,competicoes.nome AS competicoes_nome
,competicoes.imagem AS competicoes_imagem
,competicoes.descricao AS competicoes_descricao
,competicoes.data AS competicoes_data
,competicoes.hora_inicio AS competicoes_hora_inicio
,competicoes.hora_termino AS competicoes_hora_termino
,competicoes.local AS competicoes_local
,competicoes.escaloes  AS competicoes_escaloes
,competicoes.estado AS competicoes_estado
,competicoes.observacoes AS competicoes_observacoes
FROM competicoes
LEFT JOIN competicoesalunos ON competicoesalunos.competicao_id = competicoes.id AND competicoesalunos.aluno_id = :aluno_id

            
ORDER BY
competicoesalunos.id DESC
, competicoes.data ASC
,competicoes.hora_inicio
,competicoes.hora_termino
", ['aluno_id' => $user->aluno->id]);
        
        
        return view('competicoesalunos.index', compact('competicoesAlunos'));
    }
    
    public function create()
    {
        return view('competicoesalunos.create');
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'competicao_id' => 'required|exists:competicoes,id',
            'posicao' => 'nullable|integer',
            'pontos_obtidos' => 'nullable|integer|min:0',
            'presente' => 'nullable|boolean',
        ]);
        
        CompeticaoAluno::create($data);
        
        return redirect()->route('competicoesalunos.index')
        ->with('success', 'Reservca criada com sucesso.');
    }
    
    public function edit(CompeticaoAluno $competicaoAluno)
    {
        return view('competicoesalunos.edit', compact('competicaoAluno'));
    }
    
    public function update(Request $request, CompeticaoAluno $competicaoAluno)
    {
        $data = $request->validate([
            'aluno_id' => 'required|exists:alunos,id',
            'competicao_id' => 'required|exists:competicoes,id',
            'posicao' => 'nullable|integer',
            'pontos_obtidos' => 'nullable|integer|min:0',
            'presente' => 'nullable|boolean',
        ]);
        
        $competicaoAluno->update($data);
        
        return redirect()->route('competicoesalunos.index')
        ->with('success', 'Reserva atualizada com sucesso.');
    }
    
    public function destroy(CompeticaoAluno $competicaoAluno)
    {
        $competicaoAluno->delete();
        
        return redirect()->route('competicoesalunos.index')
        ->with('success', 'Reserva removida com sucesso.');
    }
}
