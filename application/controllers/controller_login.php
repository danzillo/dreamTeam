<?php

class Controller_Login extends Controller
{
    function index()
    {
        if (isset($_POST['login']) && isset($_POST['pass'])) {
            $login = $_POST['login'];
            $password = $_POST['pass'];
            if ($login == "admin" && $password == "12345") {
                $data["login_status"] = "sucsess"; //если данные введены верно
                session_start();// создаем сеанс на сервере для админа
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['pass'] = $_POST['pass'];
                $_SESSION['staus'] = "administrator";
                header("Location:/admin/");
            } else {
                $data ["login_status"] = "fail";// если данные введены с ошибкой
            }
        }
        else{
            $data["login_status"] = "";
        }
        $this->view->generate("login_view.php", "admin_template_view.php", $data);
    }
}

//
//class Controller_Login extends Controller
//{
//
//	function index()
//	{
//		//$data["login_status"] = "";
//        echo $say = htmlspecialchars($_POST["pass']);
//		if(isset($_POST['login']) && isset($_POST['pass']))
//		{
//			$login = $_POST['login'];
//			$password =$_POST['pass'];
//
//			/*
//			Производим аутентификацию, сравнивая полученные значения со значениями прописанными в коде.
//			Такое решение не верно с точки зрения безопсаности и сделано для упрощения примера.
//			Логин и пароль должны храниться в БД, причем пароль должен быть захеширован.
//			*/
//			if($login=="admin" && $password=="12345")
//			{
//				$data["login_status"] = "access_granted";
//
//				session_start(); echo $_SESSION['admin'];
//				$_SESSION['admin'] = $password;
//				header('Location:/admin/');
//			}
//			else
//			{
//				$data["login_status"] = "access_denied";
//			}
//		}
//		else
//		{
//			$data["login_status"] = "";
//		}
//
//		$this->view->generate('login_view.php', 'admin_template_view.php', $data);
//	}
//
//}
