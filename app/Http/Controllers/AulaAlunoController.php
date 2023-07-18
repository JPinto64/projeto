<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Aula;
use App\Models\AulaAluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AulaAlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $aulasAlunos = DB::select("SELECT
 tutores.nome AS tutores_nome
 ,tutores.bio AS tutores_bio
 ,tutores.classificacao AS tutores_classificacao
,tutores.linguasfaladas AS tutores_linguasfaladas
,aulasalunos.id
,CASE WHEN aulasalunos.id IS NOT NULL THEN 1 ELSE 0 END AS agendada
,aulas.id AS aulas_id
,aulas.data AS aulas_data
,aulas.hora_inicio AS aulas_hora_inicio
,aulas.hora_termino AS aulas_hora_termino
,aulas.local AS aulas_local
,aulas.escalao  AS aulas_escalao
,aulas.estado AS aulas_estado
,aulas.observacoes AS aulas_observacoes
,aulas.tutor_id AS aulas_tutor_id
FROM aulas
LEFT JOIN aulasalunos ON aulasalunos.aula_id = aulas.id AND aulasalunos.aluno_id = :aluno_id 
LEFT JOIN tutores ON aulas.tutor_id = tutores.id

ORDER BY aulas.data
,aulas.hora_inicio
,aulas.hora_termino
", ['aluno_id' => $user->aluno->id]);
        
        return view('aulasalunos.index', compact('aulasAlunos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aulas = Aula::all();
        $alunos = Aluno::all();
        
        return view('aulaaluno.create', compact('aulas', 'alunos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'aula_id' => 'required',
            'aluno_id' => 'required',
        ]);
        
        $aulaAluno = AulaAluno::create($request->all());
        
        return redirect()->route('aulasalunos.index')
        ->with('success', 'Agendamento atualizado com sucesso.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(AulaAluno $aulaAluno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AulaAluno $aulaAluno)
    {
        $aulas = Aula::all();
        $alunos = Aluno::all();
        
        return view('aulaaluno.edit', compact('aulaaluno', 'aulas', 'alunos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AulaAluno $aulaAluno)
    {
        $request->validate([
            'aula_id' => 'required',
            'aluno_id' => 'required',
            'presente' => 'boolean',
        ]);
        
        
        $aulaAluno->update($request->all());
        return redirect()->route('aulasalunos.edit', $aulaAluno)->with('success', 'Agendamento atualizado com sucesso');
        
    }

<<<<<<< Updated upstream
=======
<<<<<<< HEAD
    public function destroy($id)
    {
        $aulaAluno = AulaAluno::find($id);
        
        if (!$aulaAluno) {
            return redirect()->route('aulaalunos.index')->with('error', 'Aluno não encontrado.');
=======
>>>>>>> Stashed changes
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AulaAluno $aulaAluno)
    {
        if (!$aulaAluno) {
            return redirect()->back()->with('error', 'Agendamento nao encontrado.');
<<<<<<< Updated upstream
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        }
        
        $aulaAluno->delete();
        
        return redirect()->route('aulasalunos.index')->with('success', 'Agendamento cancelado com sucesso.');
<<<<<<< Updated upstream
        
    }
    
=======
<<<<<<< HEAD
    }
=======
        
    }
    
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
}
