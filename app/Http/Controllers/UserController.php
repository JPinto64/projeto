<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'usergroup' => 'required',
        ]);
        
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->usergroup = $request->input('usergroup');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        
        return redirect()->route('users.edit', $user->id)
<<<<<<< Updated upstream
        ->with('success', 'Usuário criado com successo.')
=======
<<<<<<< HEAD
        ->with('success', 'Utilizador criado com successo.')
=======
        ->with('success', 'Usuário criado com successo.')
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        ;
    }
    
    
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        if (!$user) {
<<<<<<< Updated upstream
            return redirect()->back()->with('error', 'Usuário não encontrado.');
=======
<<<<<<< HEAD
            return redirect()->back()->with('error', 'Utilizador não encontrado.');
=======
            return redirect()->back()->with('error', 'Usuário não encontrado.');
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        }
        
        return view('users.edit', compact('user'));
    }
    
    public function update(Request $request, User $user)
    {
        
        $user->update();
        
<<<<<<< Updated upstream
        return redirect()->route('users.edit', $user)->with('success', 'Usuário atualizado com sucesso');
=======
<<<<<<< HEAD
        return redirect()->route('users.edit', $user)->with('success', 'Utilizador atualizado com sucesso');
=======
        return redirect()->route('users.edit', $user)->with('success', 'Usuário atualizado com sucesso');
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
    }
    
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        
        if (!$user) {
<<<<<<< Updated upstream
            return redirect()->back()->with('error', 'Usuário não encontrado.');
=======
<<<<<<< HEAD
            return redirect()->back()->with('error', 'Utilizador não encontrado.');
=======
            return redirect()->back()->with('error', 'Usuário não encontrado.');
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
        }
        
        $user->delete();
        
<<<<<<< Updated upstream
        return redirect()->route('users.index')->with('success', 'Usuário removido com sucesso.');
=======
<<<<<<< HEAD
        return redirect()->route('users.index')->with('success', 'Utilizador removido com sucesso.');
=======
        return redirect()->route('users.index')->with('success', 'Usuário removido com sucesso.');
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
    }
}
