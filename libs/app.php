<?php 
require_once 'controllers/errores.php';
	class App{
		function __construct(){

			$url = isset($_GET['url']) ? $_GET['url']: "index";
			$url = filter_var(rtrim($url,'/'), FILTER_SANITIZE_URL);
			$url = explode('/', $url);

			if(empty($url[0])){
				$archivoController = 'controllers/index.php';
				require_once $archivoController;
				$controller = new Index();
				$controller->loadModel('index');
				$controller->render();
				return false;
			}
			$archivoController = 'controllers/' . $url[0] . '.php';

			if(file_exists($archivoController)){
				require_once $archivoController;

				//inicializar controlador
				$controller = new $url[0];
				$controller->loadModel($url[0]);

				//si hay un metodo que se require
				if(isset($url[1])){
					$controller->{$url[1]}();
				}else{
					$controller->render();
				}
			}else{
				
				$controller = new Errores();
			}

		}
	}
 ?>