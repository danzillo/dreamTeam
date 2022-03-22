<h1>Портфолио</h1>
<p>
<table>
    Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
    <tr><td>Год</td><td>Проект</td><td>Описание</td></tr>
    <?php
    $news  = $data['news'];
    $xyu = $data['xyi'];
    foreach($news as $new)
    {
        echo $new['id'].'</br>';
        echo $new['category'].'</br>';
    }

    echo $xyu;

    ?>
</table>
</p>
<form action="/portfolio" method="post">
    <input name="qwe" type="text">
    <input type="submit">
</form>
