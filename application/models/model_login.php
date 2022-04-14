<?php

class Model_Login extends Model
{

    public function get_login_data()
    {
        $query = 'SELECT * FROM admin_db ';
        // WHERE login=$login AND pass=$password
        return $this->query($query);
    }
}
