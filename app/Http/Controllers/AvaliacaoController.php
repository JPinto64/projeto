<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avaliacao;

class AvaliacaoController extends Controller
{
    public function index()
    {
        $avaliacoes = Avaliacao::all();
        return view('avaliacao', compact('avaliacoes'));
    }
    public function store(Request $request)
    {
        $avaliacao = new Avaliacao();
        $avaliacao->id_users = $request->input('id_users');
        $avaliacao->data = $request->input('data');
        $avaliacao->tecnica = $request->input('tecnica');
        $avaliacao->fisica = $request->input('fisica');
        $avaliacao->desempenho = $request->input('desempenho');
        $avaliacao->observacoes = $request->input('observacoes');
        $avaliacao->save();

        return redirect()->route('avaliacao.show', $avaliacao->id);
    }

    public function show($id)
    {
        $avaliacao = Avaliacao::findOrFail($id);
        return view('avaliacao.show', compact('avaliacao'));
    }

}
