<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;


class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alunos.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            //'numero' => 'required|unique:alunos',
            'nome' => ['required', 'regex:/^[\pL\s\-]+$/u', 'min:5'],
            'nif' => 'required|digits:9',
            'sexo' => 'required|in:M,F',
            'datadenascimento' => 'required|date',
            'data_inscricao' => 'required|date',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'required|email',
            'telemovel' => 'required|digits:9',
            'telemovel2' => 'nullable|digits:9',
            'endereco' => 'required',
            'escalao' => 'required|in:A,B,C,D',
            'estado' => 'required|in:Ativo,Suspenso,Em divida',
        ]);


        //gera  novo numero
        $lastAluno = Aluno::orderBy('id', 'desc')->first();
        $numero = str_pad($lastAluno ? ($lastAluno->id + 1) : 1, 9, '0', STR_PAD_LEFT);

        $aluno = new Aluno($validatedData);
        $aluno->numero = $numero;
        $aluno->observacoes = $request->observacoes;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoPath = $foto->store('fotos_alunos', 'public');
            $aluno->foto = $fotoPath;
        }

        $user = new User();
        $user->name = $numero;
        $user->email = $aluno->email;
        $user->password = $aluno->nif;
        $user->usergroup = 'Alunos';

        $user->save();

        $user = DB::table('users')->where('name', $numero)->first();

        $aluno->user_id = $user->id;

        $aluno->save();

        // return redirect()->route('alunos.index')->with('success', 'Aluno criado com successo.');
        return redirect()->route('alunos.edit', $aluno->id)
        ->with('success', 'Aluno criado com successo.')
        ->with('success', "Novo usuário criado. Nome: {$user->name} | Senha: {$aluno->nif}")
        ;
    }


    /**
     * Display the specified resource.
     */
    public function show(Aluno $aluno)
    {
        return view('alunos.show', compact('aluno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aluno $aluno)
    {
        if (!$aluno) {
            return redirect()->back()->with('error', 'Aluno não encontrado.');
        }

        return view('alunos.edit', compact('aluno'));
    }

    public function update(Request $request, Aluno $aluno)
    {

        $validatedData = $request->validate([
            'numero' => 'required',
            'nome' => ['required', 'regex:/^[\pL\s\-]+$/u', 'min:5'],
            'nif' => 'required|digits:9',
            'sexo' => 'required|in:M,F',
            'datadenascimento' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'required|email',
            'telemovel' => 'required|digits:9',
            'telemovel2' => 'nullable|digits:9',
            'endereco' => 'required',
            'estado' => 'required|in:Ativo,Suspenso,Ferias,Ausente',
            'estado' => 'required|in:Ativo,Suspenso,Em divida',
        ]);


        $aluno->update($validatedData);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            //$photoPath = $photo->storeAs('fotos_alunos', 'foto.jpg', 'public');
            $fotoPath = $foto->store('fotos_alunos', 'public');
            $aluno->foto = $fotoPath;
            $aluno->save();
        }

        return redirect()->route('alunos.edit', $aluno)->with('success', 'Aluno atualizado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aluno $aluno)
    {

        if (!$aluno) {
            return redirect()->back()->with('error', 'Aluno não encontrado.');
        }


        if ($aluno->foto && Storage::disk('fotos_alunos')->exists($aluno->foto)) {
            Storage::disk('fotos_alunos')->delete($aluno->foto);
        }

        $aluno->delete();

        return redirect()->route('alunos.index')->with('success', 'Aluno removido com sucesso.');
    }
}
