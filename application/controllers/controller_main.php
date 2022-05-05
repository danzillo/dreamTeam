<?php

class Controller_Main extends Controller
{

	function index()
	{
        //выход из сессии админа
        session_start();
        session_destroy();
		$this->view->generate('main_view.php', 'template_view.php');
	}
}