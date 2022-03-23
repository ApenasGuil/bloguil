@extends('layouts.master')
@section('title', 'Login')

@section('content')
    <div class="row mx-1 d-flex justify-content-around">
        <div class="col-md-12">
            <h1>Login</h1>
            <form action="{{ route('login.do') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="mb-3">
                    <small>
                        Novo por aqui? <a href="{{ route('form.register') }}">Cadastrar</a>
                    </small>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </div>
@endsection
