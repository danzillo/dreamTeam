<h1>Страница авторизации</h1>
<table>
    <form action="" method="post">
        <tr>
            <th colspan="2">Авторизация</th>
        </tr>
        <tr>
            <td style="text-align: center">Логин:</td>
            <td><input type="text" name="login" placeholder="admin" required></td>
        </tr>
        <tr>
            <td style="text-align: center"> Пароль:</td>
            <td><input type="password" name="pass" placeholder="12345" required></td>
        </tr>
        <tr>
            <th colspan="1" style="text-align: right">
            <td><input type="submit" value="Войти" name="btn" style="width: 150px; height: 30px;"></td>
        </tr>
    </form>
</table>

<?php extract($data); ?>
<?php if ($login_status == "fail") { ?>
    <p style="color:red">Проверьте правильность данных!</p>
<?php } ?>