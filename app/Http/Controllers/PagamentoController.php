<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;

class PagamentoController extends Controller
{
    public function index()
    {

        $pagamentos = Pagamento::all();
        return view('pagamento', compact('pagamentos'));
    }
    public function efetuarPagamento()
    {
        $userId = $request->input('userId');
        return redirect("/home?$userId");
    }
}

