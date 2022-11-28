@extends('layouts.master')

@section('content')

    <!-- Table Start -->
    <section class="container-fluid px-4">
        <h3>Detalhes do Navio</h3>
            <form class="row g-3" action="{{ url('navio-update/'.$navio->id) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nome do Navio</label>
                        <input type="text" class="form-control" value="{{ $navio->nome_navio }}" name="nome_navio" id="nome_navio" >
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Marca do Navio</label>
                        <input type="text" class="form-control" value="{{ $navio->marca_navio }}" name="marca_navio" id="marca_navio">
                    </div>
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Porto de Registo</label>
                        <input type="text" class="form-control" value="{{ $navio->porto_registro }}" name="porto_registro" id="porto_registro">
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Ano de Chegada</label>
                        <input type="date" class="form-control" value="{{ $navio->ano_chegada }}" name="ano_chegada" id="ano_chegada">
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">ind. chamada</label>
                        <input type="text" class="form-control" value="{{ $navio->ind_chamada }}" name="ind_chamada" id="ind_chamada">
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">GRT do Navio</label>
                        <input type="text" class="form-control" value="{{ $navio->grt_navio }}" name="grt_navio" id="grt_navio">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Nome Do Agente</label>
                        <input type="text" class="form-control" value="{{ $navio->nome_agente }}" name="nome_agente" id="nome_agente">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Endereço do Agente</label>
                        <input type="text" class="form-control" value="{{ $navio->endereco_agente }}" name="endereco_agente" id="endereco_agente">
                    </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Salvar alterações</button>
                    <a href="/navios-register" class="btn btn-danger">Cancelar</a>

                </div>
            </form>
    </section>
    <!-- Table End -->


@endsection
