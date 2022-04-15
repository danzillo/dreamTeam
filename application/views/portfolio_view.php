<h1>Портфолио</h1>
<p>
<table>
    Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
    <tr><td>Год</td><td>Проект</td><td>Описание</td></tr>
    <?php

    $news  = $data['news'];
  //  echo $news[3];
//    $xyu = $data['xyi'];
   foreach($news as $new)
    {
//        echo $new['id'];
//        echo $new['event_name'];
//        echo $new['event_dicription'];
//        echo $new['event_data'];

        echo '<tr><td>'.$new['id'].'</td><td>'.$new['event_name'].'<td><td>'.$new['event_dicription'].'</td><td>'.$new['event_data'].'</td></td>';
    }

  // echo $xyu;

    ?>
</table>
</p>
<form action="../../index.php" method="post">
    <input name="qwe" type="text">
    <input type="submit">
</form>
