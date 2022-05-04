<style>
    table {
        border-collapse: collapse;
        line-height: 1.1;
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        background:  radial-gradient(farthest-corner at 50% 50%, rgb(27, 26, 26), #131414);
        color: #0C213B;

    }
    caption {
        font-size: 53px;
        font-weight: 1000;
        letter-spacing: .5px;
        line-height: 44px;
        padding: 3% 1.2% 1% 1.2%;
        color: #648880;
        text-decoration: none;
        margin-bottom: 3%;

    }

    th {
        padding: 10px;
        border: 1px solid #A9E2CC;
        color:rgb(199, 199, 199)
    }
    td {
        font-size: 0.8em;
        padding: 10px;
        border: 1px solid #A9E2CC;
        color:rgb(199, 199, 199)
    }
    .first {
        font-size: 1em;
        font-weight: bold;
        text-align: center;
    }
    .krug{
        border-radius:0 0 0 10px;
        -webkit-border-radius:0 0 0 10px;
        -moz-border-radius:0 0 0 10px;
        -ms-border-radius:0 0 0 10px;
        -o-border-radius:0 0 0 10px;
        -khtml-border-radius: 0 0  0 10px;}

</style>

<section class="row">
    <div class="grid">
        <section class="schedule ">



            <table class ="scale _anim-items animnh">
                <caption class = "logo js1 _anim-items animnh rasp color1">Расписание</caption>
                <tr>


                </tr>
                <tr>
                    <td class="first krug">Понедельник</td>
                    <td class="first">Среда</td>
                    <td class="first">Пятница</td>
                    <td class="first">Воскресенье</td>
                    <td class="first">Примечания</td>
                    <td class="first opa">Время</td>
                </tr>
                <tr>

                    <td>Дворец Культуры, секция 6</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>10:00</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Дворец Культуры, секция 6</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>11:00</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Дворец Культуры, секция 6</td>
                    <td></td>
                    <td>12:00</td>
                </tr>
                <tr>

                    <td></td>
                    <td>Дворец Культуры, секция 6</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>13:00</td>
                </tr>
                <tr>
                    <td>Дворец Культуры, секция 6</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>14:00</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Дворец Культуры, секция 6</td>
                    <td>На входе предъявить пропуск.</td>
                    <td>15:00</td>
                </tr>

            </table>


        </section>
    </div>
</section>



<?php

$event_data  = $data['event_data'];
//var_dump($event_data);
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