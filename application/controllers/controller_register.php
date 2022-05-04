<?php

class Controller_Register extends Controller{
    function __construct()
    {
        $this->model = new Model_Register();
        $this->view = new View();
    }
    function send_mail($email){
        if(mail($email, 'Регистрация', 'Ваша регистрация на мероприятие прошла успешно!') ) {echo'Письмо успешно отправлено';
        }else{echo 'Ошибка';}
    }

    function index(){
        //ссылочка подключающася к бд и отправляющая данные если они введены
        $link =$this->model->set_data();
        var_dump($link);
        if (isset($_POST['name']) && isset($_POST['phone'])  &&isset($_POST['mail'])){
            // отправка данных в бд

            //отправка письма по введенному почтовому адресу
            $this->send_mail($_POST['mail']);

            //редирект, чтобы очистить форму
            header("Location:/register/");

            if ($link) {
                $data['register_status'] = "sucsess";
                // $registerStatus = $data[]
                //echo '<p>Данные успешно добавлены в таблицу.</p>';

//                unset($_POST["Name"]);
//                var_dump($_POST["Name"]);
//                unset($_POST["Price"]);
            } else {
                $data['registerStatus'] = "fail";
               // echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';

//                unset($_POST["Name"]);
//                unset($_POST["Price"]);
            }

        }
        $this->view->generate("register_view.php", "template_view.php");
    }
}
