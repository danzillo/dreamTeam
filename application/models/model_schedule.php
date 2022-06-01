<?php

class Model_Schedule extends Model
{

    public function get_event_data()
    {
        $query = 'SELECT day.day_id, tm.time_id, ev.event_theme  FROM day_week day, event ev, time tm WHERE ev.data_id = day.day_id AND ev.time_id = tm.time_id';
        return $this->query($query);
    }

}
