<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Application\Usuario;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Facades\Log;
use App\Models\Application\Session;
use Illuminate\Support\Str;

class LoginController extends Controller
{


    public function index()
    {   
        $retorno = session()->get("retorno");
        return view('Application/index', $retorno ? $retorno : [] );
    }

    /**
     * Faz a validação dos dados do login
     */
    public function makeLogin(Request $request)
    {

        $nome_usuario = $request->input('usuario');
        $senha = $request->input('senha');

        $validateObject = Validator::make($request->all(), [
            'usuario' => 'required',
            'senha' => "required",
        ]);
        
        if (!$validateObject->fails()) {
           
            $dados_usuario = [
                "email" => $request->input('usuario'),
                "password" => $request->input('senha'),
                "active" => 1
            ];    

            if(Auth::attempt($dados_usuario)){

                return redirect()->route("home");
                
            }//true
            else{

                //XXX Login falhou
                $validateObject->errors()->add("","Usuário ou Senha inválido");

            }//else

        } //if

        return redirect()->route('login')->withErrors($validateObject)
                                         ->with(["retorno" => $request->all() ]);

    } //makeLogin

    /**
     * Desloga o usuário da sessão
     */
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }//logout

}
