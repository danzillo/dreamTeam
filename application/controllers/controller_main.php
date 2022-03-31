<?php

class Controller_Main extends Controller
{

	function index()
	{	
		$this->view->generate('main.php');
	}
}