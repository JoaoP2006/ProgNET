<?php
include_once __DIR__. './../modelo/Conexao.php';
include_once __DIR__. './../modelo/Usuario.php';
include_once __DIR__. './../modelo/UsuarioDAO.php';
class AuthController{

    public function login(){
        $dao= new UsuarioDAO();

        if(isset($_POST['login']) && isset($_POST['senha'])){
            $login=$_POST['login'];
            $senha=$_POST['senha'];
            $dao->autenticar($login,$senha)
            if(!isset($usr)){
                header("Location:rota.php?rota=home");
            }
        }else{
            header("Location:rota.php");

        }else{
            header("location:rota.php");
        }
    }
}


?>