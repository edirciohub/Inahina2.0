<?php

namespace App\Http\Controllers\Admin\Agent;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    //
    //
    public function registered(){

        $agents= User::all();
        $agent = $agents->intersect(User::whereIn('usertype', ['agente'])->get());
        $totalAgents= $agent->count();

        return view('admin.agent.register', compact('agent','totalAgents'));
    }

    public function create(Request $request)
    {
        $agent = new User;

        $agent->usertype = 'agente';

        $agent->name = $request->input('name');
        $agent->genero = $request->input('genero');
        $agent->bi = $request->input('bi');
        $agent->nuit = $request->input('nuit');
        $agent->phone = $request->input('phone');
        $agent->endereco = $request->input('endereco');
        $agent->nacionalidade = $request->input('nacionalidade');
        $agent->email = $request->input('email');
        $agent->password = $request->input('password');

        $agent->save();

        return redirect('/agents-register')->with('status','Agente Cadastrado com Sucesso');

    }

    public function edit($id) {

        $agent = User::findOrfail($id);
        return view('admin.agent.agent-edit')->with('users',$agent);
    }

    public function update(Request $request, $id) {

        $agent = User::find($id);
        $agent->name = $request->input('name');
        $agent->usertype = $request->input('usertype');
        $agent->genero = $request->input('genero');
        $agent->bi = $request->input('bi');
        $agent->nuit = $request->input('nuit');
        $agent->phone = $request->input('phone');
        $agent->endereco = $request->input('endereco');
        $agent->nacionalidade = $request->input('nacionalidade');
        $agent->email = $request->input('email');
        $agent->password = $request->input('password');
        $agent->update();

        return redirect('/agents-register')->with('status','Atualizado com Sucesso');
    }

    public function delete($id){
        $agent = User::findOrfail($id);
        $agent->delete();

        return redirect('/agents-register')->with('status','Apagado com Sucesso');

    }
}
