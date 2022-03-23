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
                return redirect()->route('Registrado e logado'); // TEM DE haver um redirecionamento, pois o login só é efetivado após cair em uma rota
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
            return redirect()->route('Logado'); // TEM DE haver um redirecionamento, pois o login só é efetivado após cair em uma rota
        } else {
            return redirect()->route('Não logado'); // TEM DE haver um redirecionamento, pois o login só é efetivado após cair em uma rota
        };

        dd('Erro ao logar usuário.');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Deslogando usuário e apagando as sessões do navegador e redirecionando à tela de login
        $request->session()->invalidate(); // Invalida e destróia a session() atual
        $request->session()->regenerateToken();
        return redirect()->route('form.login'); // Retorna para login view após destruir a session()
    }
}
