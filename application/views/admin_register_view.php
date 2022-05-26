
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
        foreach ($all_list as $list){

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
            $reg_list = $data['register_user'];
            foreach ($reg_list as $list){
            ?>

            <tr>
                <td><?= $list['name'] ?></td>
                <td><?= $list['phone'] ?></td>
                <td><?= $list['mail'] ?></td>
                <td><input type="checkbox" name="accept[]" value="<?= $list['id'] ?>"></td>
                <td><input type="checkbox" name="decline[]" value="<?= $list['id'] ?>"></td>
            </tr>
            </tbody>
            <?php
            }
            //?>

        </table>
        <input type="submit" value="Обновить списки"/>


    </form>
