<?php

class Controller_Login extends Controller
{
    function __construct()
    {
        $this->model = new Model_Login();
        $this->view = new View();
    }

    function index()
    {
        //в admin data - данные всех администраторов сайта
        $admin_data = $this->model->get_login_data();

        // $data['admin_data'] = array_reverse($admin_data);
        // var_dump($admin_data);

        //обрабатываем данные от клиента
        if (isset($_POST['login']) && isset($_POST['pass'])) {

            //данные с формы
            $login = $_POST['login'];
            $password = $_POST['pass'];

            //перибираем весь ассоциативный массив БД пока не попадется совпадение
            foreach ($admin_data as $new) {
                if ($login == $new['login'] && $password == $new['pass']) {
                    $data["login_status"] = "sucsess"; //если данные введены верно
                    session_start();// создаем сеанс на сервере для админа
                    $_SESSION['status'] = "administrator"; //статус сессии
                    header("Location:/admin/");
                } else if ($new == end($admin_data)){
                    // если данные введены с ошибкой и перебраны все возможноые комбинации
                    $data ["login_status"] = "fail";
                }
            }
        } else {
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