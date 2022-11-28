@extends('layouts.master')

@section('content')

    <!-- Review Start -->
    <section class="container">
        @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h3 class="px-1">Navíos</h3>
        <div class="row g-4 h-100">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-info rounded d-flex align-items-center text-white p-3">
                    <i class="fa fa-ship fa-3x text-white"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total de Navíos </p>
                        <h6 class="mb-0">{{ $navios }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <a href="#" role="button" class="text-decoration-none  modal-dialog-centered" data-bs-toggle="modal"
                   data-bs-target="#Modal">
                    <div class="bg-info rounded d-flex align-items-center text-white p-3  w-100">
                        <i class="fa fa fa-plus fa-3x text-white"></i>
                        <div class="ms-3">
                            <p class="mb-2">Cadastrar Navios</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
            <!-- Modal -->
            <div class="modal fade modal-xl" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Navio</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/save-navios" method="POST">
                            @csrf
                            <div class="modal-body">
                                <!-- Table Start -->
                                <section class="container-fluid px-4">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Nome do Navio</label>
                                            <input type="text" class="form-control"  name="nome_navio" id="nome_navio">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Marca do Navio</label>
                                            <input type="text" class="form-control" name="marca_navio" id="marca_navio">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputEmail4" class="form-label">Porto de Registo</label>
                                            <input type="text" class="form-control" name="porto_registro" id="porto_registro">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword4" class="form-label">Ano de Chegada</label>
                                            <input type="date" class="form-control" name="ano_chegada" id="ano_chegada">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword4" class="form-label">ind. chamada</label>
                                            <input type="text" class="form-control" name="ind_chamada" id="ind_chamada">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputPassword4" class="form-label">GRT do Navio</label>
                                            <input type="text" class="form-control" name="grt_navio" id="grt_navio">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Nome Do Agente</label>
                                            <input type="text" class="form-control" name="nome_agente" id="nome_agente">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Endereço do Agente</label>
                                            <input type="text" class="form-control" name="endereco_agente" id="endereco_agente">
                                        </div>
                                    </div>
                                </section>
                                <!-- Table End -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </section>
    <!-- Review End -->
    <!-- Table Start -->
    <section class="container pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Lista de Usuarios</h6>
                    <div class="table-responsive">
                        <table id="datatable" class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome do Navio</th>
                                <th scope="col">Marca do Navio</th>
                                <th scope="col">Porto de Registo</th>
                                <th scope="col">Ano de Registo</th>
                                <th scope="col">ind. Chamada</th>
                                <th scope="col">GRT do Navio</th>
                                <th scope="col">Nome do Agente</th>
                                <th scope="col">Endereço do Agente</th>
                                <th scope="col">Editar Navio</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($navio as $data)
                                    <tr>
                                        <th scope="row">{{ $data->id }}</th>
                                        <td>{{ $data->nome_navio }}</td>
                                        <td>{{ $data->marca_navio }}</td>
                                        <td>{{ $data->porto_registro }}</td>
                                        <td>{{ $data->ano_chegada }}</td>
                                        <td>{{ $data->ind_chamada }}</td>
                                        <td>{{ $data->grt_navio }}</td>
                                        <td>{{ $data->nome_agente }}</td>
                                        <td>{{ $data->endereco_agente }}</td>
                                        <td>
                                            <div class="d-grid gap-2 d-md-block" role="group">
                                                <a href="{{ url('navios-edit/'.$data->id) }}">
                                                    <button type="button" class="btn btn-warning">
                                                        <i class="fa fa-pen fa-1x"></i>
                                                    </button>
                                                </a>


                                                    <button  type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal"class="btn btn-danger">
                                                        <i class="fa fa-trash fa-1x"></i>
                                                    </button>


                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Apagar Navio</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Tem Certeza que deseja apagar?
                                                </div>
                                                <div class="modal-footer">
                                                    <form class="d-inline" action="{{ url('navio-delete/'.$data->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Sim Apagar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Table End -->


@endsection


