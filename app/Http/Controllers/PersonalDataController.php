<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\dadospessoa;


class PersonalDataController extends Controller
{
    public function index(Request $request):View
    {
        return view('dadospessoais');
    }

    public function dadospessoa(Request $request)
    {
        // Valide os dados recebidos do formulário
        $dadosValidados = $request->validate([
            'nome' => 'required',
            'data_nascimento' => 'required|date',
            'email' => 'required|email',
            'morada' => 'required',
            'cod_postal' => 'required',

        ]);

        // Guardar na base de dados usando um modelo
        $dadopessoal = new dadospessoa();
        $dadopessoal->nome = $dadosValidados['nome'];
        $dadopessoal->data_nascimento = $dadosValidados['data_nascimento'];
        $dadopessoal->email = $dadosValidados['email'];
        $dadopessoal->morada = $dadosValidados['morada'];
        $dadopessoal->cod_postal = $dadosValidados['cod_postal'];

        $dadopessoal->save();
        // Redirecione o usuário para uma página de confirmação ou outra página de sua escolha
        return redirect('/home')->with('success', 'Dados pessoais salvos com sucesso!');

    }
}
