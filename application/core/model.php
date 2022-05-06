<?php

class Model
{

    public function query($query)
    {
        require 'connection.php';
        $mysqli = new mysqli($host, $user, $password, $database);

        //проверка соединения
        if ($mysqli->connect_error) {
            die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }

        //запрос к БД
        $result = $mysqli->query($query);
       // var_dump($result);
        if ($result->num_rows && $result->num_rows > 0) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        if ($result)
            return true;
        return false;
    }

    // метод выборки данных
    public function get_data()
    {
        // todo
    }
}