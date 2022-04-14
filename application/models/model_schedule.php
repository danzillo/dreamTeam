<?php

class Model_Schedule extends Model
{

    public function get_event_data()
    {
        $query = 'SELECT day.day_name ,ev.event_time, ev.event_theme, sp.speaker_name  FROM day_week day, event ev, speaker sp WHERE ev.data_id = day.day_id AND ev.speaker_id = sp.speaker_id';
        return $this->query($query);
    }

}
