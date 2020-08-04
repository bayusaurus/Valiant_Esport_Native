<?php  


class App
{

	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];
	
	function __construct()
	{
		$url = $this->parseURL();

		//menentukan controller
		if (file_exists('../app/controllers/'. $url[0] .'.php')) 
		{
			$this->controller = $url[0];
			unset($url[0]);
		}
		else{
			$this->controller = $url[0];
			if ($this->controller=='') {
				header('Location: '.BASEURL.'/Home/index');
			}else{
				header('Location: '.BASEURL.'/Utilities/Not_Found');
			}
		}

		require_once '../app/controllers/'. $this->controller .'.php';
		$this->controller = new $this->controller;

		//menentukan method jika ada
		if (isset($url[1])) 
		{
			if (method_exists($this->controller, $url[1]))
			{
				$this->method = $url[1];
				unset($url[1]);
			}
			else if(!method_exists($this->controller, $url[1])){
				header('Location: '.BASEURL.'/Utilities/Not_Found');	
			}
		}

		//menentukan parameter jika ada
		if (!empty($url)) 
		{
			$this->params=array_values($url);
		}
		// var_dump($this->params);
		//jalankan controller dan method dan kirimkan params bila ada
		call_user_func_array([$this->controller, $this->method], $this->params);
	}

	//untuk memecah data dari url menjadi array controler, method dan params
	public function parseURL()
	{
		if (isset($_GET['url'])) 
		{
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			return $url;
		}
	}
}

?>