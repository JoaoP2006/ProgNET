<?php
class Conexao{
    public static function get conexao(){

    

    return new PDO('mysql:host=localhost;bdname=crud',"root", "admin")
 }
}
?>