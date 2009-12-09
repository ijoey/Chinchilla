<?php
class_exists('AppResource') || require('AppResource.php');
class IndexResource extends AppResource{
	public function __construct(){
		parent::__construct();
	}
	public function __destruct(){
		parent::__destruct();
	}
	
	public function get_index(){
		$this->title = "Introduction to Chinchilla";
		$this->output = $this->renderView('index/index', null);
		return $this->renderView('layouts/default', null);
	}
	
}

?>