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
                } else if ($new == end($admin_data)) {
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