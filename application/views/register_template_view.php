<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Accumen
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120712

Modified by VitalySwipe
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8"/>
    <title>DreamTeam</title>
    <link rel="stylesheet" href="../../assets/stylesheets/main.css">
    <link rel="stylesheet" href="../../assets/stylesheets/adaptive.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?
family=Roboto:400,300,100&subset=cyrillic,latin">
    <link rel="shortcut icon" href="../../assets/images/logosite.png" type="image/x-icon">
</head>

<body>
<h1 class="logoright jslogo _anim-items">
    <a class="logolol" href="../../index.php">Styles <br> Conference&copy;</a>
</h1>
</body>

<style>
    body {
        background: url(../../assets/images/1.jpg);
    }
</style>
<header class="primary-header container group" id = "head">
    <nav class="nav primary-nav">
        <ul>
            <li><a href="/main" class="otstupl">Главная</a></li>
            <!--
    -->
            <li><a href="/speakers" class="otstup">Спикеры</a></li>
            <!--
    -->
            <li><a href="/schedule" class="otstup">Расписание</a></li>
            <!--
    -->
            <li><a href="/venue" class="otstup">Место проведения</a></li>
            <!--
    -->
            <li><a href="/register" class="otstupp">Регистрация</a></li>
        </ul>

    </nav>

</header>
<div id="content">
    <div class="box">
        <?php include 'application/views/' . $content_view; ?>
        <!--
        <h2>Welcome to Accumen</h2>
        <img class="alignleft" src="images/pic01.jpg" width="200" height="180" alt="" />
        <p>
            This is <strong>Accumen</strong>, a free, fully standards-compliant CSS template by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>. The images used in this template are from <a href="http://fotogrph.com/">Fotogrph</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 3.0</a> license, so you are pretty much free to do whatever you want with it (even use it commercially) provided you keep the footer credits intact. Aside from that, have fun with it :)
        </p>
        -->
    </div>
    <br class="clearfix"/>
</div>


<footer class="primary-footer container group">
    <small class="logosm">Styles<br>Conference&copy;</small>
    <nav class="nav">
        <ul>
            <li><a href="/main">Главная</a></li>
            <!--
    -->
            <li><a href="/speakers">Спикеры</a></li>
            <!--
    -->
            <li><a href="/register">Расписание</a></li>
            <!--
    -->
            <li><a href="/venue">Место проведения</a></li>
            <!--
    -->
            <li><a href="/register">Регистрация</a></li>
        </ul>

    </nav>
</footer>
<script src="../../js/js.js"></script>
</html>