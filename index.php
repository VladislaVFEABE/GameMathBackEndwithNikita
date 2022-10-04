<?php
include('dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/forma.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
<div>
<div>
    <h1>Чтобы пройти нашу игру зарегистрируйтесь или авторизуйтесь.</h1>
 <div class="overlay">
    <form method="POST"   name="registerform" >
       <div class="con">
       <header class="head-form">
          <h2>Регистрация</h2>
       </header>
       <br>
       <div class="field-set">
                  <p><label>Ваше имя:<br>
             <input class="form-input" name="u_name" id="txt-input" type="text">
             <p><label>Желаемый ник:<br>
                <input class="form-input" name="u_nicename" id="txt-input" type="text">
          <span class="input-item">
            <i class="fa fa-key"></i>
            <p><label>Ваш email:<br>
            <input name="u_email" size="30" type="email" class="form-input" id="txt-input"></label></p>
           </span>
           <p><label>Пароль:<br>
          <input class="form-input" type="password" id="pwd"  name="u_pass"></label></p>
         <span>
            <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
         </span>    
          <p><input name="register" class="form-input"   id="txt-input" type="submit" value="Зарегестрироваться"></p>
           <a href="login.php">Уже зарегистрированы? Вход в кабинет</a>
    </form>
    </div>
</div>

</div>
</body>
</html>