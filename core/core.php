<?php

	class Core {

		public function run() {

			$url = '/'.(isset($_GET['q'])?$_GET['q']:'');

			$params = array();

			if ($url != "/") {
				$url = explode("/", $url);
				array_shift($url);

				// Define o Controller
				$currentController = $url[0].'Controller';
				array_shift($url);

				// Define a Action
				if (isset($url[0])) {
					$currentAction = $url[0];
					array_shift($url);
				} else {
					$currentAction = 'index';					
				}

				// Depois de executar array_shift duas vezes na $url, só vai sobrar um array com os parâmetros para as Actions
				if (count($url) > 0) {
					$params = $url;
				}


			} else {
				$currentController = 'homeController';
				$currentAction = 'index';
			}

			$c = new $currentController();
			call_user_func_array(array($c, $currentAction), $params);

		}

	}

?>