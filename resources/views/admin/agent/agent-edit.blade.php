@extends('layouts.master')

@section('content')

    <!-- Table Start -->
    <section class="container-fluid pt-4 px-4">
        <form class="row g-3" action="/agents-register-update/{{ $users->id }}" method="POST">
            @csrf
            @method('PUT')
            <h3>Detalhes do Perfil</h3>
            <div class="col-md-6">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" value="{{ $users->name }}" class="form-control" id="name">
            </div>
            <div class="col-6">
                <label for="genero" class="form-label">Genero</label>
                <input type="text" name="genero" value="{{ $users->genero }}" class="form-control" id="genero">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Tipo de Usuário</label>
                <select name="usertype" class="form-control">
                    <option selected value="{{ $users->usertype }}">-</option>
                    <option value="admin">Adminstrador</option>
                    <option value="supervisor">Supervisores</option>
                    <option value="agente">Agente</option>
                </select>
                {{--                <select name="usertype">--}}
                {{--                    @foreach ($users->usertype as $version)--}}
                {{--                        <option value="{{ $version }}" @selected(old('usertype') == $version)>--}}
                {{--                        {{ $version }}</option>--}}
                {{--                    @endforeach--}}
                {{--                </select>--}}
            </div>
            <div class="col-md-6">
                <label for="bi" class="form-label">Bi</label>
                <input type="text" name="bi" value="{{ $users->bi }}" class="form-control" id="bi">
            </div>

            <div class="col-md-6">
                <label for="nuit" class="form-label">NUIT</label>
                <input type="text" name="nuit" value="{{ $users->nuit }}" class="form-control" id="nuit">
            </div>

            <div class="col-md-6">
                <label for="phone" class="form-label">Contacto</label>
                <input type="text" name="phone" value="{{ $users->phone }}" class="form-control" id="phone">
            </div>
            <div class="col-md-6">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" name="endereco" value="{{ $users->endereco }}" class="form-control" id="endereco">
            </div>

            <div class="col-6">
                <label for="nacionalidade" class="form-label">Nacionalidade</label>
                <input type="text" name="nacionalidade" value="{{ $users->nacionalidade }}" class="form-control" id="nacionalidade">
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" value="{{ $users->email }}" class="form-control" id="email">
            </div>

            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="text" name="password" value="{{ $users->password }}" class="form-control" id="password">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar alterações</button>
                <a href="/agents-register" class="btn btn-danger">Cancelar</a>
            </div>
        </form>
    </section>
    <!-- Table End -->

@endsection
