<?php

class Controller_Contacts extends Controller
{
	
	function index()
	{
		$this->view->generate('contacts_view.php');
	}
}
