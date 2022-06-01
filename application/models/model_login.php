<?php

class Model_Login extends Model
{

    public function get_login_data()
    {
        $query = 'SELECT * FROM admin_db ';
        return $this->query($query);
    }
}