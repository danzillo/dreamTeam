<h1>Портфолио</h1>
<p>
<table>
    Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
    <tr>
        <td>Год</td>
        <td>Проект</td>
        <td>Описание</td>
    </tr>
    <?php
    $news = $data['news'];
    foreach ($news as $new) {
        echo '<tr><td>' . $new['id'] . '</td><td>' . $new['event_name'] . '<td><td>' . $new['event_dicription'] . '</td><td>' . $new['event_data'] . '</td></td>';
    }
    ?>
</table>
</p>
<form action="../../index.php" method="post">
    <input name="qwe" type="text">
    <input type="submit">
</form>
