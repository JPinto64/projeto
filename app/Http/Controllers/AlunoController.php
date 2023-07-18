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
<<<<<<< Updated upstream

=======
<<<<<<< HEAD
    
=======

>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
     
        
        //gravacao deve ser feita numa transacao para garantir que o utilizador e guardado juntamente com o aluno
        DB::beginTransaction();
        
        try {
        //gera  novo numero
        $lastAluno = Aluno::orderBy('id', 'desc')->first();
        $numero = str_pad($lastAluno ? ($lastAluno->id + 1) : 1, 9, '0', STR_PAD_LEFT);
        
        $aluno = new Aluno($validatedData);
        $aluno->numero = $numero;
        $aluno->observacoes = $request->observacoes;
        
=======
>>>>>>> Stashed changes


        //gera  novo numero
        $lastAluno = Aluno::orderBy('id', 'desc')->first();
        $numero = str_pad($lastAluno ? ($lastAluno->id + 1) : 1, 9, '0', STR_PAD_LEFT);

        $aluno = new Aluno($validatedData);
        $aluno->numero = $numero;
        $aluno->observacoes = $request->observacoes;

<<<<<<< Updated upstream
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoPath = $foto->store('fotos_alunos', 'public');
            $aluno->foto = $fotoPath;
        }
<<<<<<< Updated upstream

=======
<<<<<<< HEAD
        
=======

>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        $user = new User();
        $user->name = $numero;
        $user->email = $aluno->email;
        $user->password = $aluno->nif;
        $user->usergroup = 'Alunos';
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
        
       // dd($user);
        
        $user->save();
        
        $user = DB::table('users')->where('name', $numero)->first();
        
        $aluno->user_id = $user->id;
       
        $aluno->save();
        DB::commit();
        
        // Redirect or return a response as needed
        } catch (\Exception $e) {
            // Rollback the transaction in case of an error
            DB::rollback();
            
            // Handle the error, redirect back, or return an error response
        }
        
        // return redirect()->route('alunos.index')->with('success', 'Aluno criado com successo.');
        return redirect()->route('alunos.edit', $aluno->id)
        ->with('success', 'Aluno criado com successo.')
        ->with('success', "Novo Utilizador criado. Nome: {$user->name} | Senha: {$aluno->nif}")
        ;
    }
    
    
=======
>>>>>>> Stashed changes

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


<<<<<<< Updated upstream
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
    /**
     * Display the specified resource.
     */
    public function show(Aluno $aluno)
    {
        return view('alunos.show', compact('aluno'));
    }
<<<<<<< Updated upstream

=======
<<<<<<< HEAD
    
=======

>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aluno $aluno)
    {
        if (!$aluno) {
            return redirect()->back()->with('error', 'Aluno não encontrado.');
        }
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
        
        return view('alunos.edit', compact('aluno'));
    }
    
    public function update(Request $request, Aluno $aluno)
    {
        
=======
>>>>>>> Stashed changes

        return view('alunos.edit', compact('aluno'));
    }

    public function update(Request $request, Aluno $aluno)
    {

<<<<<<< Updated upstream
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
        
        
        $aluno->update($validatedData);
        
=======
>>>>>>> Stashed changes


        $aluno->update($validatedData);

<<<<<<< Updated upstream
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            //$photoPath = $photo->storeAs('fotos_alunos', 'foto.jpg', 'public');
            $fotoPath = $foto->store('fotos_alunos', 'public');
            $aluno->foto = $fotoPath;
            $aluno->save();
        }
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
        
        return redirect()->route('alunos.edit', $aluno)->with('success', 'Aluno atualizado com sucesso');
    }
    
    
=======
>>>>>>> Stashed changes

        return redirect()->route('alunos.edit', $aluno)->with('success', 'Aluno atualizado com sucesso');
    }


<<<<<<< Updated upstream
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aluno $aluno)
    {
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
        
        if (!$aluno) {
            return redirect()->back()->with('error', 'Aluno não encontrado.');
        }
        
        
        if ($aluno->foto && Storage::disk('fotos_alunos')->exists($aluno->foto)) {
            Storage::disk('fotos_alunos')->delete($aluno->foto);
        }
        
        $aluno->delete();
        
=======
>>>>>>> Stashed changes

        if (!$aluno) {
            return redirect()->back()->with('error', 'Aluno não encontrado.');
        }


        if ($aluno->foto && Storage::disk('fotos_alunos')->exists($aluno->foto)) {
            Storage::disk('fotos_alunos')->delete($aluno->foto);
        }

        $aluno->delete();

<<<<<<< Updated upstream
=======
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        return redirect()->route('alunos.index')->with('success', 'Aluno removido com sucesso.');
    }
}
