<?php

class MenuController
{
	public function index()
	{
		try{
			$model = Produtos::getProducts();
			var_dump($model);
		}catch(Exeception $e){
			echo $e -> getMesseger();
			//capturado execeção criada no controller Model Postagem
		}
		
	}
}