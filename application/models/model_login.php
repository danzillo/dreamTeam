<?php

class Model_Login extends Model
{

    public function get_login_data()
    {
        $query = 'SELECT * FROM admin_db ';
        // WHERE login=$login AND pass=$password
        // решить как сделать проверку на подлкючения к БД;
       // var_dump($this->query($query));
        return $this->query($query);
    }
}