<?php

class Controller_Venue extends Controller
{
	function index()
	{
		$this->view->generate('venue_view.php', 'template_view.php');
	}
}
