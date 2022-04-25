<?php

class Controller_Admin extends Controller
{

    function index()
    {
        session_start();
        /*
        Для простоты, в нашем случае, проверяется равенство сессионной переменной admin прописанному
        в коде значению — паролю. Такое решение не правильно с точки зрения безопасности.
        Пароль должен храниться в базе данных в захешированном виде, но пока оставим как есть.
        */
        if ($_SESSION['status'] == "administrator") {
            $this->view->generate('admin_view.php', 'template_view.php', $data);
        } else {
            session_destroy();
            Route::ErrorPage404();
        }

        if (isset($_POST["Name"])) {
            //Вставляем данные, подставляя их в запрос
            $sql = mysqli_query($data, "INSERT INTO `products` (`id`,`Name`, `Price`) VALUES (NULL,'{$_POST['Name']}', '{$_POST['Price']}')");
            //Если вставка прошла успешно
//            if ($sql) {
//                echo '<p>Данные успешно добавлены в таблицу.</p>';
//            } else {
//                echo '<p>Произошла ошибка: ' . mysqli_error($data) . '</p>';
//            }
        }

    }

    // Действие для разлогинивания администратора
    function action_logout()
    {
        session_start();
        session_destroy();
        header('Location:/');
    }

}
