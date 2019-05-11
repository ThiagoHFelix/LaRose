<?php

namespace App\Http\Controllers\Application;

use Exception;
use App\Models\Application\Usuario;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CadastrousuarioController extends Controller
{

    /**
     * Carrega a view de cadastro
     */
    public function index(){
        return view('Application/cadastroUsuario',session()->get('retorno') ? session()->get('retorno') : []);
    }//index


    /**
     * Faz a validação e o cadastro do usuário
     */
    public function makeCadastro(Request $request){

        $sucesso = false;
        $dados_validados = true;
        $validateObject = Validator::make($request->all(),[
            "nome" => "required",
            "email" => "email|required",
            "senha" => "min:6|required|required_with:cofirma_senha|same:confirma_senha",
            "confirma_senha" => "min:6|required"
        ]);

        
        if($validateObject->fails() === false){
         
            //====================================================
            //XXX Verificando se o usuário e email já existem
            //====================================================
            $usuarios = Usuario::all();
            
            foreach($usuarios as $index_u => $usuario){

                if(mb_strtoupper($usuario->name) == mb_strtoupper($request->input('nome'))){
                     $validateObject->errors()->add('nome','Este nome de usuário já está sendo utilizado');
                     $dados_validados = false;
                     break;
                }//if
                
                if(mb_strtoupper($usuario->email) == mb_strtoupper($request->input('email'))){
                     $validateObject->errors()->add('nome','Este email já está sendo utilizado');
                     $dados_validados = false;
                     break;
                }//if
                
            }//foreach

            if($dados_validados === true){

                try{
                    
                    $usuarioModel = new Usuario;

                    $usuarioModel->name = $request->input('nome');
                    $usuarioModel->password = bcrypt($request->input('senha'));
                    $usuarioModel->email = $request->input('email');

                    $sucesso = $usuarioModel->save();
                }//try
                catch(Exception $e){
                    var_dump($e->getMessage());die;
                }//catch    

            }//if


        }//if
        
        $dados_retorno = $request->all();
        $dados_retorno["sucesso"] = $sucesso;
        
        if($sucesso === true){
            $dados_retorno["nome"] = '';
            $dados_retorno["email"] = '';
        }//if

        return redirect()->route('cadastro_usuario')->withErrors($validateObject)
                                                    ->with(['retorno' => $dados_retorno]);

    }//makeCadastro


}