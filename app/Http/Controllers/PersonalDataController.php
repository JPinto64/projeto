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
<<<<<<< Updated upstream
        // Redirecione o usuário para uma página de confirmação ou outra página de sua escolha
=======
<<<<<<< HEAD
        // Redirecione o Utilizador para uma página de confirmação ou outra página de sua escolha
=======
        // Redirecione o usuário para uma página de confirmação ou outra página de sua escolha
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        return redirect('/home')->with('success', 'Dados pessoais salvos com sucesso!');

    }
}
