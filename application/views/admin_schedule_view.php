<li><a href="/admin" class="otstup">Назад</a></li>

<h>Общий список</h>
<table class="iksweb">
    <form method="post" action="">
        <tbody>
        <tr>
            <th>День</th>
            <th>Описание</th>
            <th>Время</th>
            <th>Удалить?</th>

        </tr>
        <?php
        $all_list = $data['all_events'];
        foreach ($all_list

        as $list){
        ?>

        <tr>
            <td><?= $list['day_name'] ?></td>
            <td><?= $list['event_theme'] ?></td>
            <td><?= $list['time_text'] ?></td>
            <td><input type="checkbox" name="decline[]" value="<?= $list['event_id'] ?>"></td>
        </tr>
        </tbody>
        <?php
        }
        //?>
</table>
<input type="submit" value="Обновить списки"/>
</form>

<form method="post" action="">
    <p><select size="1" name="day">
            <option disabled>Выберите день недели</option>
            <?php
            $all_days = $data['all_days'];
            var_dump($data["all_days"]);
            foreach ($all_days as $all_day) {
                ?>
                <option value="<?= $all_day['day_id'] ?>"><?= $all_day['day_name'] ?></option>
            <?php } ?>
        </select></p>

    <p><select size="1" name="time">
            <option disabled>Выберите время</option>
            <?php
            $all_times = $data["all_times"];
            var_dump($data["all_times"]);
            foreach ($all_times as $all_time) {
                ?>
                <option value="<?= $all_time['time_id'] ?>"><?= $all_time['time_text'] ?></option>
            <?php } ?>
        </select></p>

    <textarea name="comment" cols="40" rows="3"></textarea></p>

    <input type="submit" value="Добавить в расписание">

</form>