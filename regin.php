<?php
$db = mysqli_connect('localhost', 'mysql', 'mysql', 'it&e');

if (!$db) {
    die("Соединение не прошло: " . mysqli_connect_error());
}

else {
if (isset($_POST['registerbtn'])){
    
        $login = $_POST['Login'];
        $email = $_POST['Email'];
        $psw = $_POST['Password'];
        $psw_repeat = $_POST['psw_repeat'];
    
        if ($psw === $psw_repeat) {
            $sql="SELECT * FROM `users` WHERE `Login`='$login'";
            $res= mysqli_query ($db, $sql);
            $num= mysqli_num_rows($res);
            
            if ($num==0) {
            mysqli_query($db, "INSERT INTO `users` (`Login`, `Email`, `Password`) VALUES ('$login', '$email', '$psw')");
            
            header('Location:signin.php');
            }
            } else {
            die('Пароли не совпадают');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/css.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портал | Регистрация</title>
</head>

<body>
    <!-- toplogo это самый верхний блок сайта, где находится логотип и кнопка с авторизацией -->
    <div class="toplogo">
        <a class="active" href="index.php">
            <img class="logo" src="img/logo.png" alt="Главная">
        </a>
        <a class="right" href="regin.php">Регистрация</a>
        <a class="right" href="signin.php">Авторизация/</a>
    </div>
    <!-- topnav это фиолетовая панель навигации со ссылками на другие страницы -->
    <div class="topnav">
        <a href="blog.php">Блог</a>
        <a href="library.php">Библиотека</a>
        <!-- marks переводится как оценки, слишком длинный перевод для успеваемости -->
        <a href="marks.php">Успеваемость</a>
        <a href="calendar.php">Календарь мероприятий</a>
    </div>

    <div class="container-2">
    <form method="POST">
      <label for="login"><b>Логин:</b></label>
      <input type="text" placeholder="Введите логин, только латиница" name="Login" pattern="^[a-zA-Z\s]+$" required>
    </br>
      <label for="email"><b>Почта:</b></label>
      <input type="email" placeholder="Введите электронную почту" name="Email" required> 
    </br>  
      <label for="psw"><b>Пароль:</b></label>
      <input type="password" placeholder="Введите пароль" name="Password" required id="krasivo-2">
    </br>
      <label for="psw_repeat"><b>Повторите пароль:</b></label>
      <input type="password" placeholder="Повторите пароль" name="psw_repeat" required id="krasivo">
    </br>
    <input type="checkbox" required id="qwe"/> <b>Нажимая на кнопку "Регистрация" вы даёте свое согласие на обработку персональных данных</b>
    <br>
    <br>
    <input type="submit" name="registerbtn" value="Регистрация">
    <br> 
    <br> 
    Уже есть аккаунт- <a href="signin.php">Войти</a>
    <br>
    <br>
    
    </form>
    </div>


</body>

</html>