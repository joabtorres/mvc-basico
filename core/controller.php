<?php

	class controller {

		public function __construct() {
			global $config;
			try {
				$this->db = new PDO('mysql:dbname='.$config['dbname'].';host='.$config['host'], $config['dbuser'], $config['dbpass']);
				$this->db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8_gen'");
			} catch(PDOException $e) {
				echo "Conexão ao banco de dados falhou: ".$e->getMessage();
			}
		}

		public function loadView($viewName, $viewData = array()) {
			extract($viewData);
			include 'views/'.$viewName.".php";
		}

		public function loadTemplate($viewName, $viewData = array()) {
			extract($viewData);
			include 'views/template.php';
		}

		public function loadViewInTemplate($viewName) {
			include 'views/'.$viewName.".php";
		}

	}
