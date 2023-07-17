<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tutores = Tutor::all();
        return view('tutores.index', compact('tutores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tutores.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            //'numero' => 'required|unique:tutores',
            'nome' => ['required', 'regex:/^[\pL\s\-]+$/u', 'min:5'],
            'nif' => 'required|digits:9',
            'sexo' => 'required|in:M,F',
            'datadenascimento' => 'required|date',
            'linguasfaladas' => 'required',
            'bio' => 'nullable',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'required|email',
            'telemovel' => 'required|digits:9',
            'telemovel2' => 'nullable|digits:9',
            'endereco' => 'required',
            'classificacao' => 'required|numeric|min:0|max:5',
            'estado' => 'required|in:Ativo,Suspenso,Ferias,Ausente',
        ]);

        //gera  novo numero
        $lastTutor = Tutor::orderBy('id', 'desc')->first();
        $numero = str_pad($lastTutor ? ($lastTutor->id + 1) : 1, 9, '0', STR_PAD_LEFT);

        $tutor = new Tutor($validatedData);
        $tutor->numero = $numero;
        $tutor->nome = $request->nome;
        $tutor->nif = $request->nif;
        $tutor->sexo = $request->sexo;
        $tutor->datadenascimento = $request->datadenascimento;
        $tutor->linguasfaladas = $request->linguasfaladas;
        $tutor->bio = $request->bio;
        $tutor->email = $request->email;
        $tutor->telemovel = $request->telemovel;
        $tutor->telemovel2 = $request->telemovel2;
        $tutor->endereco = $request->endereco;
        $tutor->classificacao = $request->classificacao;
        $tutor->estado = $request->estado;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoPath = $foto->store('fotos_tutores', 'public');
            $tutor->foto = $fotoPath;
        }

        $user = new User();
        $user->name = $numero;
        $user->email = $tutor->email;
        $user->password = $tutor->nif;
        $user->usergroup = 'Tutores';

        $user->save();

        $user = DB::table('users')->where('name', $numero)->first();

        $tutor->user_id = $user->id;

        $tutor->save();

       // return redirect()->route('tutores.index')->with('success', 'Tutor criado com successo.');
        return redirect()->route('tutores.edit', $tutor->id)->with('success', 'Tutor criado com successo.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Tutor $tutor)
    {
        return view('tutores.show', compact('tutor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tutor $tutor)
    {
        if (!$tutor) {
            return redirect()->back()->with('error', 'Tutor não encontrado.');
        }

        return view('tutores.edit', compact('tutor'));
    }

        public function update(Request $request, Tutor $tutor)
        {

            $validatedData = $request->validate([
                'numero' => 'required',
                'nome' => ['required', 'regex:/^[\pL\s\-]+$/u', 'min:5'],
                'nif' => 'required|digits:9',
                'sexo' => 'required|in:M,F',
                'datadenascimento' => 'required|date',
                'linguasfaladas' => 'required',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'email' => 'required|email',
                'telemovel' => 'required|digits:9',
                'telemovel2' => 'nullable|digits:9',
                'endereco' => 'required',
                'classificacao' => 'required|numeric|min:0|max:5',
                'estado' => 'required|in:Ativo,Suspenso,Ferias,Ausente',
            ]);


        $tutor->update($validatedData);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            //$photoPath = $photo->storeAs('fotos_tutores', 'foto.jpg', 'public');
            $fotoPath = $foto->store('fotos_tutores', 'public');
            $tutor->foto = $fotoPath;
            $tutor->save();
        }

        return redirect()->route('tutores.edit', $tutor)->with('success', 'Tutor atualizado com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tutor $tutor)
    {

        if (!$tutor) {
            return redirect()->back()->with('error', 'Tutor não encontrado.');
        }


        if ($tutor->foto && Storage::disk('fotos_tutores')->exists($tutor->foto)) {
            Storage::disk('fotos_tutores')->delete($tutor->foto);
        }

        $tutor->delete();

        return redirect()->route('tutores.index')->with('success', 'Tutor removido com sucesso.');
    }
}
