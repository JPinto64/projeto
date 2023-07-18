<?php

namespace App\Http\Controllers;

use App\Models\Cobranca;
use Illuminate\Support\Facades\Auth;

class CobrancasAlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $cobrancas = Cobranca::where('aluno_id', $user->aluno->id)->get();
        return view('cobrancas-aluno', compact('cobrancas'));
    }

}
