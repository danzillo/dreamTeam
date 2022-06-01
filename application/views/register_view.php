<section class="register1">
    <style>
        * {
            box-sizing: border-box;
        }

        .sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
        }


        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: rgb(25, 25, 25);
            color: #949393;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: rgb(253, 253, 253);
            outline: none;
        }

        .registerbtn {
            background-color: rgb(75, 34, 2);
            color: rgb(255, 255, 255);
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            border-radius: 10px

        }

        .registerButton {
            margin: 0;
            padding: 0;
            border: 0;
            font: inherit;
            vertical-align: baseline;
            scroll-behavior: smooth;
            border-bottom: 1px solid #dfe2e5;
            text-decoration: none;
            font-weight: bold;
            text-decoration: none;

        }

        .btn {

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

        .btn-alt {
            border: 1px solid #fff;
            padding: 10px 30px;

        }

        .btn-alt:hover {
            background: rgb(78, 6, 6);
            color: #fff;

        }

        .registerbtn:hover {
            opacity: 1;
        }

        .registerButton {
            margin: 0;
            padding: 0;
            border: 0;
            font: inherit;
            vertical-align: baseline;
            scroll-behavior: smooth;
            border-bottom: 1px solid #dfe2e5;
            text-decoration: none;
            font-weight: bold;
            text-decoration: none;
            margin: 0 auto;
        }

        .knopka {
            background: transparent;
            border: none !important;
            margin: 0;
            padding: 0;
            border: 0;
            font: inherit;
            vertical-align: baseline;
            scroll-behavior: smooth;

            text-decoration: none;

            text-decoration: none;
            margin: 0 auto;
        }
    </style>


    <form action="" method="post">
        <div class="container">
            <h1 style="color:white "> Форма регистрации</h1>
            <p style="color:white "> Пожалуйста, заполните эту форму, чтобы зарегистрироваться на мероприятие.</p>
            <p style="color:white ">* Обязательно</p>
            <hr>

            <label for="name"><b style="color:white ">Фамилия и имя*</b></label>
            <input type="text" placeholder="Введите фамилию и имя" name="name" required>

            <label for="phone"><b style="color:white ">Телефон*</b></label>
            <input type="text" placeholder="Введите телефон" name="phone" required>

            <label for="mail"><b style="color:white ">Эл.почта*</b></label>
            <input type="text" placeholder="Введите почту" name="mail" required>
            <hr>

        </div>

        <div class="container signin">

        </div>
        <section class="hero container js3 _anim-items animnh">
            <a class="btn btn-alt ">
                <button class="btn btn-alt knopka">Зарегистрируйтесь сейчас</button>
            </a>
        </section>
    </form>
    <style>
        body {
            background: url(../../assets/images/5.jpg);
        }
    </style>
    </body>

</section>
