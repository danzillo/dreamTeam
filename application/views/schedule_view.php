<section class="row">
    <section class="schedule ">

        <table class=" _anim-items animnh ">
            <caption class="logo js1 _anim-items animnh rasp color2 scale">Расписание</caption>

            <tr>
                <td class="first1">04.09</td>
                <td class="first1">05.09</td>
                <td class="first1">06.09</td>
                <td class="first1">07.09</td>
                <td class="first1"></td>

            </tr>
            <tr>
                <td class="first">Понедельник</td>
                <td class="first">Среда</td>
                <td class="first">Пятница</td>
                <td class="first">Воскресенье</td>
                <td class="first opa">Время</td>
            </tr>
            <!--    <?php
            /*    $schedule = array( array(" ", " " , " ", " " , " "),
                    array(" ", " " , " ", " " , " "),
                    array(" ", " " , " ", " " , " "),
                    array(" ", " " , " ", " " , " "),
                    array(" ", " " , " ", " " , " ")
                );

            //заполняю этот массив по дате
            //и вывожу массив
                $event_data = $data['event_data'];
                var_dump($event_data);
                foreach ($event_data as $event) {
                $count = 1;
                for ($i = 1; $i < 5; $i++) {
                if ($event['day_id'] == 1 && $event['time_id'] == 1 && $count == 1) {
                */ ?>
    <td class="nechet"><?php /*echo $event['event_theme'];
        $count++;
        */ ?> </td> <? /*//вносим данные в таблицу
    }  else  */ ?>
    <td class="nechet"></td> <? /*
    } */ ?>
    <td class="vremya nechet"></td> </tr> --><? /*
    }
    */ ?>

            <?php
            $schedule = array(array(" ", " ", " ", " ", " "),
                array(" ", " ", " ", " ", " "),
                array(" ", " ", " ", " ", " "),
                array(" ", " ", " ", " ", " "),
                array(" ", " ", " ", " ", " ")
            );

            //заполняю этот массив по дате
            //и вывожу массив
            $event_data = $data['event_data'];
            var_dump($schedule);
            foreach ($event_data as $event) {
                $schedule[$event['day_id']][$event['time_id']] = $event['event_theme'];
            }

            for ($b = 0; $b < 4; $b++) {
                ?>
                <td class="nechet"><?php echo $schedule[0][$b];
                    ?> </td> <? //вносим данные в таблицу
            } ?>
            <td class="vremya nechet">10:00-12:00</td>
            </tr>

            <?php

            for ($b = 0; $b < 4; $b++) {
                ?>
                <td><?php echo $schedule[1][$b];
                    ?> </td> <? //вносим данные в таблицу
            } ?>
            <td class="vremya">12:00-14:00</td>
            </tr>


            <?php

            for ($b = 0; $b < 4; $b++) {
                ?>
                <td class="nechet"><?php echo $schedule[2][$b];
                    ?> </td> <? //вносим данные в таблицу
            } ?>
            <td class="vremya nechet">14:00-16:00</td>
            </tr>


            <?php

            for ($b = 0; $b < 4; $b++) {
                ?>
                <td><?php echo $schedule[3][$b];
                    ?> </td> <? //вносим данные в таблицу
            } ?>
            <td class="vremya">16:00-18:00</td>
            </tr>


            <?php

            for ($b = 0; $b < 4; $b++) {
                ?>
                <td class="nechet"><?php echo $schedule[4][$b];
                    ?> </td> <? //вносим данные в таблицу
            } ?>
            <td class="vremya nechet">18:00-20:00</td>
            </tr>

            <tr>
                <td class="first2" colspan=6>Дополнительно</td>
            </tr>
            <tr>
                <td class="first3" colspan=6>Возможны перебои с горячей водой</td>
            </tr>
            <tr>
                <td class="first3next" colspan=6></td>
            </tr>
            <tr>
                <td class="first3next" colspan=6></td>
            </tr>
            <tr>
                <td class="first3next" colspan=6></td>
            </tr>
            <tr>
                <td class="first3next" colspan=6></td>
            </tr>
            <tr>
                <td class="first" colspan=6></td>
            </tr>
            <tr>
                <td class="first" colspan=6></td>
            </tr>
            <tr>
                <td class="first" colspan=6></td>
            </tr>

        </table>


    </section>
</section>
<style>
    body {
        background: url(../../assets/images/3.jpg);
    }
</style>




