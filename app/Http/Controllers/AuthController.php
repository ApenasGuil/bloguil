<?php

namespace App\Http\Controllers;

use App\Models\{
    User,
};
use Illuminate\Http\{
    Request,
};
use Illuminate\Support\Facades\{
    Auth,
    Hash,
};

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                auth()->login($user);
                dd('Usuário registrado e logado com sucesso!');
            } else {
                dd('Erro ao efetuar login.');
            }
        }

        dd('Erro ao cadastrar novo usuário.');
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        if (Auth::attempt($credentials)) { // Verificação no DB, para ver se os dados enviados pelo form 'login' batem
            dd('Usuário logado com sucesso!');
        } else {
            dd('Credenciais não combinam.');
        };

        dd('Erro ao logar usuário.');
    }
}
