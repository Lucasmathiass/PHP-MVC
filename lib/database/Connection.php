<?php
abstract class Connection
{
    private static $conn;

    public function getConn()
    {
        self::$conn = new PDO('mysql:dbname=sistemaPedido;localhost','root', '');
        if(!self::$conn){
            throw new Exeption("Não foi possível encontrar registros no banco de dados");
        }
        return self::$conn;
    }
}