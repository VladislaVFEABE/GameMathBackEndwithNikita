<?php
if(isset($_POST["register"])){
if(!empty($_POST['u_name']) && !empty($_POST['u_nicename']) && !empty($_POST['u_email']) && !empty($_POST['u_pass'])) {
 $connect=mysqli_connect('localhost', 'u1656895_vlad', 'hH4vE4uH1axI1i', 'u1656895_vlad');
 $name=mysqli_real_escape_string($connect,$_POST['u_name']);
 $nicename=mysqli_real_escape_string($connect,$_POST['u_nicename']);
 $email=mysqli_real_escape_string($connect,$_POST['u_email']);
 $pass=mysqli_real_escape_string($connect,$_POST['u_pass']);
 $query=mysqli_query($connect, "SELECT * FROM `users` WHERE nicename='{$nicename}'");
 $numr=mysqli_num_rows($query);
 if($numr==0)
 {
 $sql_q="INSERT INTO `users`
 (name,nicename,email,pass)
 VALUES('{$name}','{$nicename}', '${email}', '{$pass}')";
 $res=mysqli_query($connect,$sql_q);
 if($res){
 echo "Аккаунт успешно создан";
 }
 else {
 echo "Не удалось добавить информацию";
 }
 }
else {
 echo "Этот ник занятый. Попробуйте другой!";
 }
}else {
 //$info = "Все поля обязательны для заполнения!";
 echo "Все поля обязательны для заполнения!";
}
}
?>