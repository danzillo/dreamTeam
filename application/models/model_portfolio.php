<?php

class Model_Portfolio extends Model
{

    public function getNews()
    {
        $query = 'SELECT * FROM categories';
        return $this->query($query);
    }
    public function getXyu(){
        return 'qwe';
    }

}
