<section class="schedule ">

    <?php

    $event_data  = $data['event_data'];
    //echo  $event_data;
    foreach($event_data as $new)
    {
        //echo $new['day_name'];
//        echo $new['event_name'];
//        echo $new['event_dicription'];
//        echo $new['event_data'];
    if($new['day_id']==1)
        echo '<tr><td>'.$new['day_name'].'</td><td>'.$new['event_time'].'<td><td>'.$new['event_theme'].'</td><td>'.$new['speaker_name'].'</td></td>';
    }

    // echo $xyu;

    ?>
    <iframe class=" scale _anim-items animnh"
            width="890"
            height="830" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>


</section>

