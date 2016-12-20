<?php

    session_start();
    ?>
    <html>
    <head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel = " stylesheet" href="css/style.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Главная страница</title>
    <style type="text/css">

    a{
        text-decoration: none;
        color: black;
    }
    body{
        background-image: url("http://www.1366x768.ru/city/3/city-nightlife-wallpaper-1366x768.jpg");

    }

  .one{
           position: absolute;
           top:150px; 
           left:550px;
        }
        
    </style>
    </head>
    <body>
    <div class="one">
    <h2>Главная страница</h2>
     <div class="block-round-content">
    <form action="testreg.php" method="post">

    <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  "Войти", данные из полей отправятся на страничку testreg.php методом  "post" ***** -->
 <p>
    <label>Ваш логин:<br></label>
    <input  class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="login" type="text" size="15" maxlength="25">
    </p>


 
    <p>

    <label>Ваш пароль:<br></label>
    <input class="form-control" id="exampleInputPassword1" placeholder="Password"  name="password" type="password" size="15" maxlength="15">
    </p>

    <p>
    <input  type="submit" name="submit"  class="btn btn-default" value="Войти">

    <!--**** Кнопочка (type="submit") отправляет данные на страничку testreg.php ***** --> 

 <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** --> 

 <button type="submit" name="Регистрация" class="btn btn-default" > <a href="reg.php"> Регистрация</a></button>
    </p> </form>
    <br>
    </div>
</div>
    <?php
    // Проверяем, пусты ли переменные логина и id пользователя
    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
    // Если пусты, то мы не выводим ссылку
    echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
    }
  
    ?>
    </body>
    </html>