<?php

class Model_Portfolio extends Model
{

    public function getNews()
    {
        $query = 'SELECT * FROM event_data order by id DESC';
        return $this->query($query);
    }
    public function getXyu(){
        return 'qwe';
    }

}
