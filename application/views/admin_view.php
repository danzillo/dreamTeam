<h1>Панель администрирования</h1>
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
</form>

<?php extract($data); ?>
<?php if($sql) { ?>
    'Данные успешно добавлены в таблицу.';
<?php } ?>
<!--
Пока что, отобразим здесь простой текст.
Далее можно добавить в админку некоторый функционал.
Например, WYSIWYG-редактор для изменения страниц сайта (видов).
Тогда, этот вид будет содержать выпадающий список для выбора страницы, поле редактора, а также кнопку
для сохранения изменений. А некоторое действие контроллера администрирования будет описывать логику редактирования страниц.
-->
</p>
