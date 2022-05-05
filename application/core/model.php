<?php

class Model
{

    public function query($query){
        require 'connection.php';
        $mysqli = new mysqli($host, $user, $password, $database);

        //проверка соединения
        if ($mysqli->connect_error) {
            die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
        }

        //запрос к БД
        $result =  $mysqli->query($query);
        if ($result->num_rows){
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