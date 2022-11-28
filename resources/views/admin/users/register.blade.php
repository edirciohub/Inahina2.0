@extends('layouts.master')

@section('content')

    <!-- Review Start -->
    <section class="container px-4">
        <h3 class="pt-4">Usuarios</h3>
        @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row g-4 h-100">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-info rounded d-flex align-items-center text-white p-3">
                    <i class="fa fa-user fa-3x text-white"></i>
                    <div class="ms-3">
                        <p class="mb-2">Usuários </p>
                        <h6 class="mb-0">Total - {{ $user }}</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <a href="#" role="button" class="text-decoration-none  modal-dialog-centered" data-bs-toggle="modal"
                   data-bs-target="#Modal">
                    <div class="bg-info rounded d-flex align-items-center text-white p-3  w-100">
                        <i class="fa fa fa-plus fa-3x text-white"></i>
                        <div class="ms-3">
                            <p class="mb-2">Cadastrar Usuários</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-xl-3">
                <a href="/supervisors-register" class="text-decoration-none">
                    <div class="bg-info rounded d-flex align-items-center text-white p-3">
                        <i class="fa fa-user-tie fa-3x text-white"></i>
                        <div class="ms-3">
                            <p class="mb-2">Supervisores </p>
                            <h6 class="mb-0">Total - {{ $totalSupervisor }} </h6>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-xl-3">
                <a href="/agents-register" class="text-decoration-none">
                    <div class="bg-info rounded d-flex align-items-center text-white p-3">
                        <i class="fa fa-user-secret fa-3x text-white"></i>
                        <div class="ms-3">
                            <p class="mb-2"> Agentes </p>
                            <h6 class="mb-0">Total - {{ $totalAgents }} </h6>
                        </div>
                    </div>
                </a>
            </div>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Dados do Usuários</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/role-create" method="POST">
                        @csrf

                        <div class="modal-body">
                            <!-- Table Start -->
                            <section class="container-fluid px-4">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Nome do Usuário</label>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="genero" class="form-label">Genero</label>
                                        <select id="genero" name="genero" class="form-select" aria-label=" genero">
                                            <option selected>Seleciona o genero</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="bi" class="form-label">BI</label>
                                        <input type="text" class="form-control" name="bi" id="bi">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nuit" class="form-label">NUIT</label>
                                        <input type="text" class="form-control" name="nuit" id="nuit">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Contacto</label>
                                        <input type="text" class="form-control" name="phone" id="phone">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="endereco" class="form-label">Endereco</label>
                                        <input type="text" class="form-control" name="endereco" id="endereco">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nacionalidade" class="form-label">Nacionalidade</label>
                                        <input type="text" class="form-control" name="nacionalidade" id="nacionalidade">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="email">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" id="password">
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
        <!-- Modal End-->


    </section>
    <!-- Review End -->

    <!-- Table Start -->
    <section class="container pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Lista de Usuarios</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Usuarios</th>
                                <th scope="col">Genero</th>
                                <th scope="col">BI</th>
                                <th scope="col">NUIT</th>
                                <th scope="col">Contactos</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Nacionalidade</th>
                                <th scope="col">Email</th>
                                <th scope="col">Tipo de Usuario</th>

                                <th scope="col">Editar Usuario</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->genero }}</td>
                                    <td>{{ $user->bi }}</td>
                                    <td>{{ $user->nuit }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->endereco }}</td>
                                    <td>{{ $user->nacionalidade }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>- {{ $user->usertype }}</td>

                                    <td>
                                        <div class="d-grid gap-2 d-md-block" role="group">
                                            <a href="/role-edit/{{ $user->id }}">
                                                <button type="button" class="btn btn-warning mx-2">
                                                    <i class="fa fa-pen fa-1x"></i>
                                                </button>
                                            </a>

                                            <form class="d-inline" action="/supervisors-delete/{{ $user->id }}"
                                                  method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash fa-1x"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
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
