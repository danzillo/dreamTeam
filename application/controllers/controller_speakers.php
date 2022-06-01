<?php

class Controller_Speakers extends Controller
{
	function index()
	{
		$this->view->generate('speakers_view.php', 'template_view.php');
	}
}
