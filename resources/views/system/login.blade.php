<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form action="{{ route('login.do') }}" method="POST">
        @csrf

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Senha</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <small>
                Novo por aqui? <a href="{{ route('form.register') }}">Cadastrar</a>
            </small>
        </div>
        <button type="submit">Entrar</button>
    </form>
</body>

</html>
