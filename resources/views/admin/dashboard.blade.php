@extends('layouts.master')

@section('content')

    <!-- Review Start -->
    <section class="container px-4">
        <div class="row g-4 py-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-info rounded d-flex align-items-center text-white p-3">
                    <i class="fa fa-chart-line fa-3x text-white"></i>
                    <div class="ms-3">
                        <p class="mb-2">Vendas de Hoje </p>
                        <h6 class="mb-0">8664674 MZN</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="bg-info rounded d-flex align-items-center text-white p-3">
                    <i class="fa fa-chart-bar fa-3x text-white"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total de Vendas </p>
                        <h6 class="mb-0">754348745368434 MZN</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="bg-info rounded d-flex align-items-center text-white p-3">
                    <i class="fa fa-chart-area fa-3x text-white"></i>
                    <div class="ms-3">
                        <p class="mb-2">Receita de Hoje</p>
                        <h6 class="mb-0">867567 MZN</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="bg-info rounded d-flex align-items-center text-white p-3">
                    <i class="fa fa-chart-pie fa-3x text-white"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total de Receita </p>
                        <h6 class="mb-0">7658757 MZN</h6>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Review End -->

    <!-- Sales Chart Start -->
    <section class="container py-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Vendas a Nivel Nacional </h6>
                        <a href="">Mostrar Todas </a>
                    </div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Vendas & Receita</h6>
                        <a href="">Mostrar Todas</a>
                    </div>
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
        </div>
    </section>
    <!-- Sales Chart End -->

    <!-- Table Start -->
    <section class="container px-4">
        <div class="bg-light rounded-2 p-3">
            <h2 class="py-2">Vendas Recentes</h2>
            <div class="table-responsive ">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                    <tr class="text-dark">
                        <th scope="col"><input class="form-check-input" type="checkbox"></th>
                        <th scope="col">Data</th>
                        <th scope="col">Fatura</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acção</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>01 Jan 2045</td>
                        <td>INV-0123</td>
                        <td>Jhon Doe</td>
                        <td>$123</td>
                        <td>Paid</td>
                        <td><a class="btn btn-sm btn-primary" href="">Detalhes</a></td>
                    </tr>
                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>01 Jan 2045</td>
                        <td>INV-0123</td>
                        <td>Jhon Doe</td>
                        <td>$123</td>
                        <td>Paid</td>
                        <td><a class="btn btn-sm btn-primary" href="">Detalhes</a></td>
                    </tr>
                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>01 Jan 2045</td>
                        <td>INV-0123</td>
                        <td>Jhon Doe</td>
                        <td>$123</td>
                        <td>Paid</td>
                        <td><a class="btn btn-sm btn-primary" href="">Detalhes</a></td>
                    </tr>
                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>01 Jan 2045</td>
                        <td>INV-0123</td>
                        <td>Jhon Doe</td>
                        <td>$123</td>
                        <td>Paid</td>
                        <td><a class="btn btn-sm btn-primary" href="">Detalhes</a></td>
                    </tr>
                    <tr>
                        <td><input class="form-check-input" type="checkbox"></td>
                        <td>01 Jan 2045</td>
                        <td>INV-0123</td>
                        <td>Jhon Doe</td>
                        <td>$123</td>
                        <td>Paid</td>
                        <td><a class="btn btn-sm btn-primary" href="">Detalhes</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Table End -->

    <!-- Review Start -->
    <section class="container py-2 px-4">
        <div class="row  gx-4">
            <!-- Agents Table Start -->
            <section class="container pt-1 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="mb-4">Lista de Agentes</h4>
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
                                    @foreach($agents as $data)
                                        <tr>
                                            <th scope="row">{{ $data->id }}</th>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->genero }}</td>
                                            <td>{{ $data->bi }}</td>
                                            <td>{{ $data->nuit }}</td>
                                            <td>{{ $data->phone }}</td>
                                            <td>{{ $data->endereco }}</td>
                                            <td>{{ $data->nacionalidade }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>- {{ $data->usertype }}</td>

                                            <td>
                                                <div class="d-grid gap-2 d-md-block" role="group">
                                                    <a href="/agents-edit/{{ $data->id }}">
                                                        <button type="button" class="btn btn-warning mx-2">
                                                            <i class="fa fa-pen fa-1x"></i>
                                                        </button>
                                                    </a>

                                                    <form class="d-inline" action="/agents-delete/{{ $data->id }}"
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
            <!-- Agents Table End -->

            <div class="col-6 col-lg-12">
                <div class="h-100 bg-light rounded p-3">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <h5 class="mb-0">Mensagens</h5>
                        <a href="">Mostrat Todas </a>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Joa Farisse </h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Mensagens curtas aparecem aqui...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom py-3">
                        <div class="w-100 ms-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-0">Jhon Doe</h6>
                                <small>15 minutes ago</small>
                            </div>
                            <span>Short message goes here...</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Review End -->

@endsection

