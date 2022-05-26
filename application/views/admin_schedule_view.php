<style>
    /* Стили таблицы (IKSWEB) */
    table.iksweb {
        text-decoration: none;
        border-collapse: collapse;
        width: 100%;
        text-align: left;
    }

    table.iksweb th {
        font-weight: normal;
        font-size: 16px;
        color: #ffffff;
        background-color: #348f00;
    }

    table.iksweb td {
        font-size: 14px;
        color: #000000;
    }

    table.iksweb td, table.iksweb th {
        white-space: pre-wrap;
        padding: 12px 20px;
        line-height: 14px;
        vertical-align: middle;
        border: 1px solid #348f00;
    }

    table.iksweb tr:hover {
        background-color: #f9fafb
    }

    table.iksweb tr:hover td {
        color: #354251;
        cursor: default;
    }
</style>


<li><a href="/admin" class="otstup">Назад</a></li>


<h>Общий список</h>
<table class="iksweb">
    <tbody>
    <tr>
        <th>День</th>
        <th>Описание</th>
        <th>Время</th>

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
    </tr>
    </tbody>
    <?php
    }
    //?>

</table>

<form method="post" action="">
    <p><select size="1" name="day">
            <option disabled>Выберите день недели</option>
            <?php
            $all_days = $data['all_days'];
            var_dump($data["all_days"]);
            foreach ($all_days as $all_day) {
                ?>
                <option value="<?= $all_day['day_name'] ?>"><?= $all_day['day_name'] ?></option>
            <?php } ?>
        </select></p>

    <p><select size="1" name="time">
            <option disabled>Выберите время</option>
            <?php
            $all_times = $data["all_times"];
            var_dump($data["all_times"]);
            foreach ($all_times as $all_time) {
                ?>
                <option value="<?= $all_time['time_text'] ?>"><?= $all_time['time_text'] ?></option>
            <?php } ?>
        </select></p>

    <textarea name="comment" cols="40" rows="3"></textarea></p>

    <input type="submit" value="Добавить в расписание">

</form>