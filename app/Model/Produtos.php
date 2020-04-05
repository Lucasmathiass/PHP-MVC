<?php
class Produtos
{
    public function getProducts()
    {
        //checar se existe infos no db
        $conn = Connection::getConn();
        //armazenando o resultado na variavel stmt
        $stmt = $conn -> prepare('SELECT * FROM tbProduto');
        $stmt -> execute();
        //criando laco para extrair dados de tale sql 

        $fetch = array();
        //enquanto houver dados crie e preencha campos na classe produtos
        while($data = $stmt -> fetchObject('Produtos')){
            $fetch[] = $data;
        }
        return $fetch;

    }
}