<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>
    <form action="{{ route('register.do') }}" method="POST">
        @csrf

        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Senha</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>
