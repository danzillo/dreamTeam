<?php

class Model_Register{
    public function set_data()
    {
        $query = "INSERT INTO `registration` (`id`,`name`, `phone`, `mail`, `accept`) VALUES (NULL,'{$_POST['name']}', '{$_POST['phone']}','{$_POST['mail']}', 0)";
        return $this->query($query);
    }
}