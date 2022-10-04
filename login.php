<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/forma.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>
<div class="overlay">
    <form method="POST"  action="igra.php" name="registerform" >
       <div class="con">
       <header class="head-form">
          <h2>Авторизация</h2>
       </header>
       <br>
       <div class="field-set">
             <p><label>Желаемый ник:<br>
                <input class="form-input" name="u_nicename" id="txt-input" type="text">
          <span class="input-item">
           <p><label>Пароль:<br>
          <input class="form-input" type="password" id="pwd"  name="u_pass"></label></p>
         <span>
         <p><input name="submit"  class="form-input" type="submit" id="txt-input"  value="Авторизоваться"></p>
 <p>Еще не зарегистрированы? Пройдите </br><a href= "index.php">регистрацию</a>!</p>
   </form>
    </form>
    </div>
   
</body>
</html>