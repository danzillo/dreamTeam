<?php

class Model_Admin_Register extends Model
{
    public function set_data()
    {
        $query = "INSERT INTO `products` (`id`,`Name`, `Price`) VALUES (NULL,'{$_POST['Name']}', '{$_POST['Price']}')";
        return $this->query($query);
    }

    public function  get_new_user(){
        $query ="SELECT * FROM `registration` WHERE `registration`.`accept`=0 ";
        return $this->query($query);
    }

    public function get_all_user(){
        $query ="SELECT * FROM `registration` ";
        return $this->query($query);
    }

    public function update_user_status($reg_id){
        $query = "UPDATE `registration` SET `accept` = '1' WHERE `registration`.`id` = {$reg_id }";
        return $this->query($query);
    }

    public function delete_user($reg_id){
        $query = "DELETE FROM `registration` WHERE `registration`.`id` = {$reg_id };";
        return $this->query($query);
    }
}
