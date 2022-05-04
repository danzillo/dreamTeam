<?php

class Model_Admin extends Model
{
    public function set_data()
    {
        $query = "INSERT INTO `products` (`id`,`Name`, `Price`) VALUES (NULL,'{$_POST['Name']}', '{$_POST['Price']}')";
        return $this->query($query);
    }

    public function  get_reg_user(){
        $query ="SELECT * FROM `registration` ";
        return $this->query($query);
    }
}
