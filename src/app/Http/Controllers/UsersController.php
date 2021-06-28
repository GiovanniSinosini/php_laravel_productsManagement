<?php


namespace App\Http\Controllers;

use App\Models\produto;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function login(Request $request){ 
        
        $email=$request->email;
        $password=$request->password;
        $utilizadores=User::where ('email', '=', $email)->where('password', '=', $password)->first();
        
        if(@$utilizadores->cod_util!=null){

            //utilizador válido
            @session_start();
            $_SESSION['id']=$utilizadores->cod_util;
            $_SESSION['nome']=$utilizadores->nome;
            $produtos=produto::orderby('id', 'desc')->paginate();
            return view('produtos.index', ['produtos'=>$produtos]);

        }

        //não existe utilizador com esre login ou esta password
        else{
            echo "<script>
            window.alert('Dados incorretos');
            </script>";
            return view('home');
        }
        
    }

    public function logout(){

        @session_start();
        @session_destroy();
        return view('home');
    }
}
