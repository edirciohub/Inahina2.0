<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Navio;
use Illuminate\Http\Request;


class NavioController extends Controller
{
    //
    public function index(){

        $navio = Navio::all();
        $navios= Navio::count();

            return view('user.navio', compact('navio','navios'));
    }

    public function create(Request $request){

        $navio = new Navio;

        $navio->nome_navio = $request->input('nome_navio');
        $navio->marca_navio = $request->input('marca_navio');
        $navio->porto_registro = $request->input('porto_registro');
        $navio->ano_chegada = $request->input('ano_chegada');
        $navio->ind_chamada = $request->input('ind_chamada');
        $navio->grt_navio = $request->input('grt_navio');
        $navio->nome_agente = $request->input('nome_agente');
        $navio->endereco_agente = $request->input('endereco_agente');

        $navio->save();

        return redirect('navios-register')->with('status','Navio Cadastrado com Sucesso');
    }

    public function edit($id){

        $navios = Navio::findOrfail($id);
        return view('user.navio-edit')
            ->with('navio',$navios);

    }

    public function update(Request $request, $id){
        $navio = Navio::findOrfail($id);
        $navio->nome_navio = $request->input('nome_navio');
        $navio->marca_navio = $request->input('marca_navio');
        $navio->porto_registro = $request->input('porto_registro');
        $navio->ano_chegada = $request->input('ano_chegada');
        $navio->ind_chamada = $request->input('ind_chamada');
        $navio->grt_navio = $request->input('grt_navio');
        $navio->nome_agente = $request->input('nome_agente');
        $navio->endereco_agente = $request->input('endereco_agente');

        $navio->update();

        return redirect('navios-register')->with('status','Navio Atualizado com Sucesso');
    }

    public function delete($id){
        $navio = Navio::findOrfail($id);
        $navio->delete();


        return redirect('navios-register')->with('status','Navio Excluido');

    }
}
