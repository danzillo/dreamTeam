<?php

class Model_Admin_Schedule extends Model
{

    function delete_event($event_id)
    {
        $query = "DELETE FROM `event` WHERE `event`.`event_id` = {$event_id}";
        return $this->query($query);
    }

    function add_event()
    {
        $query = "INSERT INTO `event` (`event_id`, `data_id`, `event_theme`, `time_id`) VALUES (NULL, '{$_POST['day']}', '{$_POST['comment']}', '{$_POST['time']}')";
        return $this->query($query);
    }

    function show_all_events()
    {
        $query = "SELECT * FROM `time` JOIN `event` ON time.time_id=event.time_id  JOIN `day_week` ON day_week.day_id=event.data_id ";
        return $this->query($query);
    }

    function show_all_days()
    {
        $query = "SELECT * FROM `day_week`";
        return $this->query($query);
    }

    function show_all_time()
    {
        $query = "SELECT * FROM `time`";
        return $this->query($query);
    }
}
