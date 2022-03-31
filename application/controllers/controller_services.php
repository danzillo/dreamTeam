<?php

class Controller_Services extends Controller
{

	function index()
	{
		$this->view->generate('venue.php');
	}
}
