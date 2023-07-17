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
        ->with('success', 'Usuário criado com successo.')
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
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }
        
        return view('users.edit', compact('user'));
    }
    
    public function update(Request $request, User $user)
    {
        
        $user->update();
        
        return redirect()->route('users.edit', $user)->with('success', 'Usuário atualizado com sucesso');
    }
    
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        
        if (!$user) {
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }
        
        $user->delete();
        
        return redirect()->route('users.index')->with('success', 'Usuário removido com sucesso.');
    }
}
