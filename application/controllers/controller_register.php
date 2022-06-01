<?php

class Controller_Register extends Controller
{
    function __construct()
    {
        $this->model = new Model_Register();
        $this->view = new View();
    }

    //функция для отправки писма
    function send_mail($email)
    {
        if (mail($email, 'Регистрация', 'Ваша регистрация на мероприятие прошла успешно!')) {
            echo 'Письмо успешно отправлено';
        } else {
            echo 'Ошибка';
        }
    }


    function index()
    {
        session_start();
        if (isset($_SESSION['register_status'])) {
            if ($_SESSION['register_status'] == "success") {
                echo "<script>alert('Вы зарегестрированы!')</script>";
            }
            unset ($_SESSION['register_status']);
        }
        /*
         * 1) происходит проверка ввденности всех данных
         * 2) если все данные введены, то происходит отправка данных с помощью $send_data
         * 3) совместно с записью данных в БД происходит отправка письма пользователю об успешной регитрации
         * 4) редирект, для избежания повторной отправки данных
        */
        if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['mail'])) {
            // отправка данных в бд
            $send_data = $this->model->set_data();
            //отправка письма по введенному почтовому адресу
            $this->send_mail($_POST['mail']);
            $_SESSION['register_status'] = "success";

            //редирект, чтобы очистить форму
            header("Location:/register/");
        }

        $this->view->generate("register_view.php", "register_template_view.php");

    }
}
