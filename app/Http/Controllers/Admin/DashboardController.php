<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    //
    public function registered(){

        $users= User::all();
        $user = User::count();

        // Numero total de Supervisores
        $supervisor = $users->intersect(User::whereIn('usertype', ['supervisor'])->get());
        $totalSupervisor= $supervisor->count();

        // Numero total de Supervisores
        $agents = $users->intersect(User::whereIn('usertype', ['agente'])->get());
        $totalAgents= $agents->count();

        return view('admin.users.register', compact('users', 'user', 'agents', 'totalAgents', 'totalSupervisor'));
    }

    public function show(){
        $users= User::all();
        $user = User::count();

        // Numero total de Supervisores
        $supervisor = $users->intersect(User::whereIn('usertype', ['supervisor'])->get());

        // Numero total de Supervisores
        $agents = $users->intersect(User::whereIn('usertype', ['agente'])->get());

        return view('admin.dashboard', compact('users', 'user', 'agents'));

    }

    public function create(Request $request)
    {
        $users = new User;

        $users->name = $request->input('name');
        $users->genero = $request->input('genero');
        $users->bi = $request->input('bi');
        $users->nuit = $request->input('nuit');
        $users->phone = $request->input('phone');
        $users->endereco = $request->input('endereco');
        $users->nacionalidade = $request->input('nacionalidade');
        $users->email = $request->input('email');
        $users->password = $request->input('password');

        $users->save();

        return redirect('role-register')->with('status', 'Usuario Cadastrado com Sucesso');

    }

    public function edit($id) {

        $users = User::findOrfail($id);
        return view('admin.users.user-edit')->with('users', $users);
    }

    public function update(Request $request, $id) {

        $users = User::find($id);
        $users->name = $request->input('name');
        $users->usertype = $request->input('usertype');
        $users->genero = $request->input('genero');
        $users->bi = $request->input('bi');
        $users->nuit = $request->input('nuit');
        $users->phone = $request->input('phone');
        $users->endereco = $request->input('endereco');
        $users->nacionalidade = $request->input('nacionalidade');
        $users->email = $request->input('email');
        $users->password = $request->input('password');
        $users->update();

        return redirect('/role-register')->with('status','Atualizado com Sucesso');
    }

    public function delete($id){
        $users = User::findOrfail($id);
        $users->delete();

        return redirect('/role-register')->with('status','Apagado com Sucesso');

    }
}
