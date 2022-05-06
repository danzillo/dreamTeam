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
<form method="post" action="">
    <table class="iksweb">
        <tbody>
        <tr>
            <th>ФИО</th>
            <th>Телефон</th>
            <th>Мэйл</th>

        </tr>
        <?php
        $all_list = $data['all_user'];
        foreach ($all_list

        as $list){

        ?>

        <tr>
            <td><?= $list['name'] ?></td>
            <td><?= $list['phone'] ?></td>
            <td><?= $list['mail'] ?></td>
        </tr>
        </tbody>
        <?php
        }
        //?>

    </table>





    <?php  $reg_list = $data['reg_user'];

    if(!empty($data['reg_user'])){?>
<h>Список на регистрацию</h>

<form method="post" action="">
    <table class="iksweb">
        <tbody>
        <tr>
            <th>ФИО</th>
            <th>Телефон</th>
            <th>Мэйл</th>
            <th>Принять</th>
            <th>Отклонить</th>
        </tr>
        <?php



        foreach ($reg_list

        as $list){

        ?>

        <tr>
            <td><?= $list['name'] ?></td>
            <td><?= $list['phone'] ?></td>
            <td><?= $list['mail'] ?></td>
            <td><input type="checkbox" name="accept[]" value="<?=$list['id'] ?>"></td>
            <td><input type="checkbox" name="decline[]" value="<?=$list['id'] ?>"></td>
        </tr>
        </tbody>


    </table>
    <input type="submit" value="Обновить списки"/>
    <?php
    }}else{
        echo "Список на регистрацию пуст";
    }
    //?>

</form>
