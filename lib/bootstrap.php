<?php
session_start();

class BootStrap{
	
	public function __construct(){
		
		$url = $_GET['url'];
		$url = rtrim($url, '/');
		$url = explode('/', $url);
		
		$file = "controllers/" . $url[0] . ".php";
		
		if(file_exists($file)){
				require $file;
				$controller = new $url[0];
			}else{
				//throw new Exception("error");
			}
		
		if(isset($url[2])){
				$controller->{$url[1]}($url[2]);
			}else{
				if(isset($url[1])){
					$controller->{$url[1]}();	
				}
			}
		
		}
	}
?>