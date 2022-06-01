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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<body>
<h1 class="logoright jslogo _anim-items">
    <a class="logolol" href="../../index.php">Styles <br> Conference&copy;</a>
</h1>
<div id="toTop"><img src="../../assets/images/UpTop.png" width="50px" height="50px" /></div>
</body>

<style>
    body {
        background: url(../../assets/images/1.jpg);
    }
    .d-none {
        display: none;
    }

    .d-block {
        display: block;
    }

    /* chatbot__btn */
    .chatbot__btn {
        position: fixed;
        bottom: 32px;
        right: 32px;
        width: 50px;
        height: 50px;
        border-radius: 25px;
        background-color: #648880;
        cursor: pointer;
        transition: background-color 0.15s ease-in-out;
    }

    .chatbot__btn::before {
        content: '';
        position: absolute;
        width: 26px;
        height: 26px;
        left: 12px;
        top: 12px;
        background: transparent no-repeat center center;
        background-size: 100% 100%;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' width='20' height='20'%3E%3Cpath fill='%23fff' d='M14 8.999v-5a2.003 2.003 0 00-2-2H3a2.003 2.003 0 00-2 2v5a2.003 2.003 0 002 2v1.694a.302.302 0 00.486.244l2.587-1.945H12A1.997 1.997 0 0014 9zm3-2h-2v2a3.003 3.003 0 01-3 3H7v2a2.003 2.003 0 002 2h3.927l2.59 1.941c.198.15.483.004.483-.243v-1.701h1a2.003 2.003 0 002-1.997v-5a2.003 2.003 0 00-2-2z' /%3E%3C/svg%3E");
    }

    .chatbot__btn:hover {
        background-color: #648880;
    }

    /* chatbot__tooltip */
    .chatbot__tooltip {
        position: absolute;
        right: 58px;
        top: 50%;
        transform: translateY(-50%);
        white-space: nowrap;
        color: #fff;
        background: #648880;
        padding: 5px 8px;
        border-radius: 4px;
        opacity: 0;
        transition: opacity 0.15s ease-in-out;
    }

    .chatbot__tooltip_show {
        opacity: 1;
    }

    .chatbot__tooltip::after {
        top: 50%;
        position: absolute;
        content: '';
        border: 5px solid transparent;
        border-left-color: #648880;
        margin-top: -5px;
        right: -10px;
    }

    /* chatbot */
    .chatbot {
        display: flex;
        flex-direction: column;
        width: 400px;
        background-color: #fafafa;
        line-height: 1.2;
        color: #212529;
        position: fixed;
        bottom: 0;
        right: 0;
        height: 60%;
        transform: scale(1);
        transform-origin: right bottom;
        transition: transform 0.3s ease;
        border-radius: 11px;
    }

    .chatbot_hidden {
        overflow: hidden;
        transform: scale(0);
        transform-origin: right bottom;
        transition: transform 0.3s ease;
    }

    @media (max-width: 576px) {
        .chatbot {
            width: 100%;
        }
    }

    .chatbot__title {
        background-color: #648880;
        color: #fff;
        padding: 1rem;
        display: flex;
        font-weight: bold;
        border-radius: 10px;
    }

    .chatbot__close {
        width: 20px;
        height: 20px;
        margin-right: 1rem;
        background: transparent no-repeat center center;
        background-size: 100% 100%;
        cursor: pointer;
        opacity: 0.8;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 448 512'%3E%3Cpath fill='%23fff' d='M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z'%3E%3C/path%3E%3C/svg%3E");
    }

    .chatbot__close:hover {
        opacity: 1;
    }

    .chatbot__reset {
        width: 20px;
        margin-left: auto;
        height: 20px;
        background: transparent no-repeat center center;
        background-size: 100% 100%;
        cursor: pointer;
        opacity: 0.8;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3E%3Cpath fill='%23fff' d='M440.65 12.57l4 82.77A247.16 247.16 0 0 0 255.83 8C134.73 8 33.91 94.92 12.29 209.82A12 12 0 0 0 24.09 224h49.05a12 12 0 0 0 11.67-9.26 175.91 175.91 0 0 1 317-56.94l-101.46-4.86a12 12 0 0 0-12.57 12v47.41a12 12 0 0 0 12 12H500a12 12 0 0 0 12-12V12a12 12 0 0 0-12-12h-47.37a12 12 0 0 0-11.98 12.57zM255.83 432a175.61 175.61 0 0 1-146-77.8l101.8 4.87a12 12 0 0 0 12.57-12v-47.4a12 12 0 0 0-12-12H12a12 12 0 0 0-12 12V500a12 12 0 0 0 12 12h47.35a12 12 0 0 0 12-12.6l-4.15-82.57A247.17 247.17 0 0 0 255.83 504c121.11 0 221.93-86.92 243.55-201.82a12 12 0 0 0-11.8-14.18h-49.05a12 12 0 0 0-11.67 9.26A175.86 175.86 0 0 1 255.83 432z'%3E%3C/path%3E%3C/svg%3E");
    }

    .chatbot__reset:hover {
        opacity: 1;
    }

    .chatbot__wrapper {
        display: flex;
        -ms-flex: 1 0 auto;
        flex: 1 0 0%;
        flex-direction: column;
        overflow-y: auto;
    }

    .chatbot__items {
        padding: 0.75rem;
        overflow-y: scroll;
        display: flex;
        flex-direction: column;
        overflow-x: hidden;
        border-radius: 10px;
    }

    .chatbot__item {
        width: 100%;
        display: flex;
        flex-shrink: 0;
        margin-bottom: .75rem;
    }

    @keyframes animationOpacity {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .chatbot__content {
        width: 70%;
        padding: 0.5rem 0.75rem;
        animation-name: animationOpacity;
        animation-duration: 0.5s;
        animation-timing-function: ease-in-out;
    }

    /* bot */
    .chatbot__content_bot {
        color: #212529;
        background: #eaeaea;
        border-radius: 0.5rem;
    }

    /* human */
    .chatbot__item_human {
        justify-content: flex-end;
    }

    .chatbot__content_human {
        text-align: right;
        padding-right: 0;
        display: flex;
        flex-direction: column;
        padding: 0;
    }

    .chatbot__content_human-disabled {
        background: #94e5cd;
        border-radius: 0.5rem;
        text-align: left;
    }

    /* btn */
    .btn {
        width: 100%;
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        display: inline-block;
        cursor: pointer;
        font-weight: 400;
        color: #212529;
        text-align: left;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: #fff9c8;
        border: 1px solid transparent;
        padding: 0.5rem 0.75rem;
        border-radius: 0.5rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn:hover {
        background-color: #fef49a;
        border: 1px solid transparent;
    }

    .btn:focus,
    .btn.focus {
        outline: 0;
    }

    .chatbot__content .btn {
        margin-bottom: 0.4rem;
    }

    .chatbot__footer {
        padding: 0.75rem;
        position: relative;
    }

    /* ie11 */
    .chatbot__input::-ms-clear {
        display: none;
    }

    .chatbot__input {
        display: block;
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        width: 100%;
        height: 40px;
        padding: 4px 36px 4px 10px;
        font-weight: 400;
        color: #212529;
        background-color: #fff;
        background-clip: padding-box;
        border: 2px solid #000000;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, background-color 0.15s ease-in-out;
    }

    .chatbot__input:disabled {
        background-color: #fafafa;
    }

    .chatbot__input:focus {
        border-color: #bdbdbd;
        outline: 0;
    }

    .chatbot__submit {
        width: 24px;
        height: 24px;
        background: transparent no-repeat center center;
        background-size: 100% 100%;
        opacity: 0.6;
        position: absolute;
        right: 22px;
        top: 50%;
        transform: translateY(-50%);
        background-image: url("data:image/svg+xml,%3Csvg aria-hidden='true' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512' width='16' height='16'%3E%3Cpath fill='currentColor' d='M476 3.2L12.5 270.6a24 24 0 002.2 43.2L121 358.4l287.3-253.2c5.5-4.9 13.3 2.6 8.6 8.3L176 407v80.5a24 24 0 0042.5 15.8L282 426l124.6 52.2a24 24 0 0033-18.2l72-432A24 24 0 00476 3.2z'%3E%3C/path%3E%3C/svg%3E");
        border: 1px solid transparent;
        background-color: transparent;
        transition: opacity 0.15s ease-in-out;
    }

    .chatbot__submit:disabled {
        opacity: 0.4;
    }

    .chatbot__submit:focus:not(:disabled),
    .chatbot__submit:hover:not(:disabled) {
        outline: 0;
        box-shadow: none;
        opacity: 0.8;
        cursor: pointer;
    }

    /* scrollbar */
    .chatbot__items::-webkit-scrollbar {
        width: 10px;

    }
    .chatbot__items::-webkit-scrollbar-track{
        background: #ffffff;
    }
    .chatbot__items::-webkit-scrollbar-thumb {
        background-color: #e0e0e0;
        border-radius: 7px;
        border: 4px solid #d8d8d8;
    }

    .chatbot__items::-webkit-scrollbar-button {
        display: none;
    }
    .btn1 {

        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-weight: 400;
        letter-spacing: .5px;
        margin: 0;
        text-transform: uppercase;
        background: rgb(143, 13, 13);
        margin-top: 30px;
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
<!-- chatbot__btn -->
<div class="chatbot__btn">
    <div class="chatbot__tooltip d-none">Есть вопрос?</div>
</div>

<!-- FingerPrint JS -->
<script src="../../js/fp2.js"></script>
<!-- ChatBot JS -->
<script src="../../js/chatbot.js"></script>

<script>
    // конфигурация чат-бота
    const configChatbot = {};
    // CSS-селектор кнопки, посредством которой будем вызывать окно диалога с чат-ботом
    configChatbot.btn = '.chatbot__btn';
    // ключ для хранения отпечатка браузера
    configChatbot.key = 'fingerprint';
    // реплики чат-бота
    configChatbot.replicas = {
        bot: {
            0: { content: ['Привет!', 'Я Ева, твой чат-бот помощник!'], human: [0] },
            1: { content: '{{name}}, перейдите на <a href="/schedule" target="_blank">страницу расписания</a>. Надеюсь, была вам полезна ;)', human: [6] },
            2: { content: 'Как мне к Вам обращаться?(Напишите ваше имя внизу)', human: [3] },
            3: { content: '{{name}}, что Вас интересует?', human: [4, 5, 1, 2] },
            4: { content: '{{name}}, для этого перейдите на <a href="/register" target="_blank">страницу регистрации</a>. Заполните форму и вам на почту придет сообщение о вашей успешной регистрации!', human: [6] },
            5: { content: '{{name}}, мероприятие будет проходить в Дворце Культуры! Для более подробной информации перейдите на <a href="/venue" target="_blank">страницу с местом проведения</a>.', human: [6] },
            6: { content: '{{name}}, как с Вами удобнее будет связаться?', human: [8, 9] },
            7: { content: '{{name}}, укажите пожалуйста ваш телефон', human: [10] },
            8: { content: '{{name}}, укажите пожалуйста ваш Email ниже', human: [10] },
            9: { content: 'Готово! {{name}}, мы свяжемся с вами в ближайшее время по {{contact}}. Всего хорошего!', human: [6] },
        },
        human: {
            0: { content: 'Привет! Я рад с тобой познакомиться', bot: 2 },
            1: { content: 'В какое время будут проходить основные ивенты?', bot: 1 },
            2: { content: 'Как мне связаться с организатором?', bot: 6 },
            3: { content: '', bot: 3, name: 'name' },
            4: { content: 'Как я могу зарегистрироваться на предприятие?', bot: 4 },
            5: { content: 'Где будет проходить мероприятие?', bot: 5 },
            6: { content: 'Спасибо!', bot: 3 },
            7: { content: '', bot: 6, name: '' },
            8: { content: 'по телефону', bot: 7 },
            9: { content: 'по email', bot: 8 },
            10: { content: '', bot: 9, name: 'contact' },
        }
    }
    // корневой элемент
    configChatbot.root = SimpleChatbot.createTemplate();
    // URL chatbot.php
    configChatbot.url = '/chatbot/chatbot.php';
    // создание SimpleChatbot
    let chatbot = new SimpleChatbot(configChatbot);
    // при клике по кнопке configChatbot.btn
    document.querySelector(configChatbot.btn).onclick = function (e) {
        this.classList.add('d-none');
        const $tooltip = this.querySelector('.chatbot__tooltip');
        if ($tooltip) {
            $tooltip.classList.add('d-none');
        }
        configChatbot.root.classList.toggle('chatbot_hidden');
        chatbot.init();
    };

    // добавление ключа для хранения отпечатка браузера в LocalStorage
    let fingerprint = localStorage.getItem(configChatbot.key);
    if (!fingerprint) {
        Fingerprint2.get(function (components) {
            fingerprint = Fingerprint2.x64hash128(components.map(function (pair) {
                return pair.value
            }).join(), 31)
            localStorage.setItem(configChatbot.key, fingerprint)
        });
    }

    // подсказка для кнопки
    const $btn = document.querySelector(configChatbot.btn);
    $btn.addEventListener('mouseover', function (e) {
        const $tooltip = $btn.querySelector('.chatbot__tooltip');
        if (!$tooltip.classList.contains('chatbot__tooltip_show')) {
            $tooltip.classList.remove('d-none');
            setTimeout(function () {
                $tooltip.classList.add('chatbot__tooltip_show');
            }, 0);
        }
    });
    $btn.addEventListener('mouseout', function (e) {
        const $tooltip = $btn.querySelector('.chatbot__tooltip');
        if ($tooltip.classList.contains('chatbot__tooltip_show')) {
            $tooltip.classList.remove('chatbot__tooltip_show');
            setTimeout(function () {
                $tooltip.classList.add('d-none');
            }, 200);
        }
    });

    setTimeout(function () {
        const tooltip = document.querySelector('.chatbot__tooltip');
        tooltip.classList.add('chatbot__tooltip_show');
        setTimeout(function () {
            tooltip.classList.remove('chatbot__tooltip_show');
        }, 10000)
    }, 10000);
</script>
<section class="hero container js3 _anim-items animnh">
    <a class="btn1 btn-alt" href="../../index.php">Зарегистрируйтесь сейчас</a>
</section>

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
            <li><a href="/schedule">Расписание</a></li>
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
<script>
    $(function() {

        $(window).scroll(function() {

            if($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });
        $('#toTop').click(function() {
            $('body,html').animate({scrollTop:0},800);
        });

    });
</script>
</html>