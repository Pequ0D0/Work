<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портал | Блог</title>
</head>

<body>
    <!-- toplogo это самый верхний блок сайта, где находится логотип и кнопка с авторизацией -->
    <div class="toplogo">
        <a class="active" href="index.php">
            <img class="logo" src="img/logo.png" alt="Главная">
        </a>
        <a class="right" href="signin.php">Авторизация/Регистрация</a>
    </div>
    <!-- topnav это фиолетовая панель навигации со ссылками на другие страницы -->
    <div class="topnav">
        <a href="blog.php">Блог</a>
        <a href="library.php">Библиотека</a>
        <!-- marks переводится как оценки, слишком длинный перевод для успеваемости -->
        <a href="marks.php">Успеваемость</a>
        <a href="calendar.php">Календарь мероприятий</a>
    </div>

    <!-- Форма авторизации -->
    <div class ="authorisation_form">
    <form action="vendor/authorisation.php" method="post" enctype="multipart/form-data">
    <label> Адрес электронной почты: </label><br>
    <input type ="text" name="auth_login" placeholder="Введите логин."><br><br>
    <label> Пароль: </label><br>
    <input type="password" name="auth_password" placeholder="Введите пароль."><br><br>
    <button type="submit">Войти.</button>
    <br><br>
    <!-- Переход к форме регистрации -->
    Отсутствует аккаунт? - <a href="regin.php">Зарегистрируйтесь.</a>
    <br><br>
    </form>
    </div>

</body>

</html>