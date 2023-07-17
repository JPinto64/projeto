<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function index(Request $request)
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
        $dadopessoal = new PersonalData();
        $dadopessoal->nome = $dadosValidados['nome'];
        $dadopessoal->birthdate = $dadosValidados['data_nascimento'];
        $dadopessoal->email = $dadosValidados['email'];
        $dadopessoal->morada = $dadosValidados['morada'];
        $dadopessoal->codigo_postal = $dadosValidados['cod_postal'];


        $dadopessoal->save();

        // Redirecione o usuário para uma página de confirmação ou outra página de sua escolha
        return redirect()->route('home')->with('success', 'Dados pessoais salvos com sucesso!');

    }
}
