<?php

namespace App\Http\Controllers\Admin\Supervisors;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SupervisorsController extends Controller
{
    //
    public function registered(){

        $supervisors= User::all();
        $supervisor = $supervisors->intersect(User::whereIn('usertype', ['supervisor'])->get());
        $total= $supervisor->count();

        return view('admin.supervisors.register', compact('supervisor','total'));
    }

    public function create(Request $request)
    {
        $supervisors = new User;

        $supervisors->usertype = 'supervisor';

        $supervisors->name = $request->input('name');
        $supervisors->genero = $request->input('genero');
        $supervisors->bi = $request->input('bi');
        $supervisors->nuit = $request->input('nuit');
        $supervisors->phone = $request->input('phone');
        $supervisors->endereco = $request->input('endereco');
        $supervisors->nacionalidade = $request->input('nacionalidade');
        $supervisors->email = $request->input('email');
        $supervisors->password = $request->input('password');

        $supervisors->save();

        return redirect('/supervisors-register')->with('status','Supervisor Cadastrado com Sucesso');

    }

    public function edit($id) {

        $supervisors = User::findOrfail($id);
        return view('admin.supervisors.supervisors-edit')->with('users',$supervisors);
    }

    public function update(Request $request, $id) {

        $supervisors = User::find($id);
        $supervisors->name = $request->input('name');
        $supervisors->usertype = $request->input('usertype');
        $supervisors->bi = $request->input('bi');
        $supervisors->nuit = $request->input('nuit');
        $supervisors->phone = $request->input('phone');
        $supervisors->endereco = $request->input('endereco');
        $supervisors->nacionalidade = $request->input('nacionalidade');
        $supervisors->email = $request->input('email');
        $supervisors->password = $request->input('password');

        $supervisors->update();

        return redirect('/supervisors-register')->with('status','Atualizado com Sucesso');
    }

    public function delete($id){
        $supervisors = User::findOrfail($id);
        $supervisors->delete();

        return redirect('/supervisors-register')->with('status','Apagado com Sucesso');

    }
}
