<?php 

	class App {

		protected $controller = 'Posts';
		protected $method	  = 'index';
		protected $params     = [];

		function __construct()
		{
			$url = $this->parseURl();
			
			//Untuk controller
			if ( file_exists('../app/controllers/' . $url[0] . '.php') ) {
				# code...
				$this->controller = $url[0];
				unset($url[0]);
			}

			require_once '../app/controllers/' . $this->controller . '.php';
			$this->controller = new $this->controller;
	
			//Untuk Method
			if ( isset($url[1]) ) {
				# code...
				//pengecekan method jika ada 
				if ( method_exists($this->controller, $url[1]) ) {
					# code...
					$this->method = $url[1];
					unset($url[1]);
				}
			}

			//Kelola parameter
			if ( !empty($url) ) {
				# code...
				$this->params = array_values($url);
			}

			//Jalankan parameter & method,serta kirimkan params jika ada 
			call_user_func_array([$this->controller, $this->method], $this->params);
		}

		public function parseURL()
		{
			# code...
			if (isset ( $_GET['url']) ) {
				# code...
				//bersihkan tanda slash "/"
				$url = rtrim($_GET['url'], '/');
				//Bersihkan URL dari karakter ngaco
				$url = filter_var($url, FILTER_SANITIZE_URL);
				//Pemecahan URL berdasarkan tanda slash
				$url = explode('/', $url);
				return $url;
			}
		}
	}


 ?>