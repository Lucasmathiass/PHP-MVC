<?php

class Core
{
	public function start($getUrl)
	{
		$action = "index";
		if(isset($getUrl['page'])){
			$controller = ucfirst($getUrl['page']."Controller");
		}else{
			$controller = "MenuController";
		}
		
		if(!class_exists($controller)){
			$controller = "ErroController";
		}

		call_user_func_array(array(new $controller, $action), array());
	}
}