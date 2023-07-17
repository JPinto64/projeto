<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aulas = Aula::all();
        return view('aulas.index', compact('aulas'));
    }

    public function __construct()
    {
        $this->middleware('administradores.group.access');
        $this->middleware('tutores.group.access');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tutores = Tutor::all();

        return view('aulas.create', compact('tutores'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'data' => 'required',
            'hora_inicio' => 'required',
            'hora_termino' => 'required',
            'local' => 'required',
            'escalao' => 'required',
            'estado' => 'required',
            'tutor_id' => 'required',
        ]);

        Validator::extend('before_termino', function ($attribute, $value, $parameters, $validator) use ($request) {
            $termino = $request->input('hora_termino');

            return strtotime($value) < strtotime($termino);
        });

        $aula = Aula::create($request->all());

        return redirect()->route('aulas.edit', $aula->id)
        ->with('success', 'Aula criada com sucesso.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Aula $aula)
    {
        return view('aulas.show', compact('aula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aula $aula)
    {
        if (!$aula) {
            return redirect()->back()->with('error', 'Aula não encontrada.');
        }

        $tutores = Tutor::all();
        return view('aulas.edit', compact('aula','tutores'));
    }

    public function update(Request $request, Aula $aula)
    {
        $request->validate([
            'data' => 'required',
            'hora_inicio' => 'required',
            'hora_termino' => 'required',
            'local' => 'required',
            'escalao' => 'required',
            'estado' => 'required',
            'tutor_id' => 'required',
        ]);

        Validator::extend('before_termino', function ($attribute, $value, $parameters, $validator) use ($request) {
            $termino = $request->input('hora_termino');

            return strtotime($value) < strtotime($termino);
        });

        $aula->update($request->all());
        return redirect()->route('aulas.edit', $aula)->with('success', 'Aula atualizada com sucesso');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aula $aula)
    {
        if (!$aula) {
            return redirect()->back()->with('error', 'Aula não encontrada.');
        }

        $aula->delete();

        return redirect()->route('aulas.index')->with('success', 'Aula removida com sucesso.');
    }

}
