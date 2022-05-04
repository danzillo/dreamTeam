<style>
    /* Стили таблицы (IKSWEB) */
    table.iksweb{text-decoration: none;border-collapse:collapse;width:100%;text-align:left;}
    table.iksweb th{font-weight:normal;font-size:16px; color:#ffffff;background-color:#348f00;}
    table.iksweb td{font-size:14px;color:#000000;}
    table.iksweb td,table.iksweb th{white-space:pre-wrap;padding:12px 20px;line-height:14px;vertical-align: middle;border: 1px solid #348f00;}
    table.iksweb tr:hover{background-color:#f9fafb}
    table.iksweb tr:hover td{color:#354251;cursor:default;}
</style>
<!--<h1>Панель администрирования</h1>
<p>


<form action="" method="post">
    <table>
        <tr>
            <td>Наименование:</td>
            <td><input type="text" name="Name"></td>
        </tr>
        <tr>
            <td>Спикер:</td>
            <td><input type="text" name="Price" size="3"> руб.</td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="OK"></td>
        </tr>
    </table>
</form>-->


<table class="iksweb">
    <tbody>
    <tr>
        <th>ФИО</th>
        <th>Телефон</th>
        <th>Мэйл</th>
        <th>Статус</th>
    </tr>
    <?php
    $reg_list = $data['reg_user'];

    foreach ($reg_list as $list){

    ?>

    <tr>
        <td><?= $list['name'] ?></td>
        <td><?= $list['phone'] ?></td>
        <td><?= $list['mail'] ?></td>
        <td><?= $list['accept'] ?></td>
    </tr>

    </tbody>


<?php
}
//?>

</table>
<!--<table>-->
<!--<tr>-->
<!--    <th>ФИО</th>-->
<!--    <th>Телефон</th>-->
<!--    <th>МЭЙЛ</th>-->
<!--    <th>Статус</th>-->
<!--</tr>-->
<!---->
<?php
//$reg_list = $data['reg_user'];
//
//
//foreach ($reg_list as $list){
//
//?>
<!---->
<!--<tr>-->
<!--    <td>--><?//= $list['name'] ?><!--</td>-->
<!--    <td>--><?//= $list['phone'] ?><!--</td>-->
<!--    <td>--><?//= $list['mail'] ?><!--</td>-->
<!--    <td>--><?//= $list['accept'] ?><!--</td>-->
<!--</tr>-->
<!--</table>-->
<!---->
<!--    --><?php
//    }
//    ?>
<!--    <!---->-->
<!--    --><?php ////extract($link); ?>
<!--    --><?php ////if($sql) { ?>
<!--    <!--    'Данные успешно добавлены в таблицу.';-->-->
<!--    --><?php ////} ?>
<!--    <!---->
<!--    Пока что, отобразим здесь простой текст.-->
<!--    Далее можно добавить в админку некоторый функционал.-->
<!--    Например, WYSIWYG-редактор для изменения страниц сайта (видов).-->
<!--    Тогда, этот вид будет содержать выпадающий список для выбора страницы, поле редактора, а также кнопку-->
<!--    для сохранения изменений. А некоторое действие контроллера администрирования будет описывать логику редактирования страниц.-->
<!--    -->-->
<!--    </p>-->
