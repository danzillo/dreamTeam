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
}

input[type=text]:focus, input[type=password]:focus {
    background-color: rgb(253, 253, 253);
    outline: none;
}

.registerbtn {
    background-color: rgb(75,34,2);
    color: rgb(255, 255, 255);
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    border-radius: 10px
}
.registerbtn:hover {
    opacity: 1;
}

</style>

<body>
  
<form action="../../index.php">
  <div class="container">
    <h1 style="color:white "> Форма регистрации</h1>
    <p style="color:white "> Пожалуйста, заполните эту форму, чтобы зарегистрироваться на мероприятие.</p>
    <p style="color:white ">* Обязательно</p>
    <hr>

    <label for="FIO"><b style="color:white ">Фамилия и имя*</b></label>
    <input type="text" placeholder="Введите фамилию и имя" name="email" required>

    <label for="psw"><b style="color:white ">Телефон*</b></label>
    <input type="text" placeholder="Введите телефон" name="psw" required>

    <label for="psw-repeat"><b style="color:white ">Эл.почта*</b></label>
    <input type="text" placeholder="Введите почту" name="psw-repeat" required>
    <hr>

    <button type="submit" class="registerbtn">Зарегистрировать</button>
  </div>
  
  <div class="container signin">
    
  </div>
</form>

</body>
 
</section>