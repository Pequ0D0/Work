<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портал | Успеваемость</title>
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
<br>

<!-- Параллель -->
    <div class = "Class_parallel">
        <?php
 $connect = mysqli_connect("localhost", "mysql", "mysql","it&e") or die ("Ошибка". mysqli_error($conn));
        $vivod_letter = mysqli_query($connect, "SELECT DISTINCT `Class_name` FROM `classes` WHERE 1");
        $tu = mysqli_fetch_assoc($vivod_letter);
        while($row = $vivod_letter->fetch_assoc()){
            ?>
            <div class = "class_parallel_letter">
            <?php
                echo $row['Class_name']; 
            ?>
                    <?php
        $vivod_year = mysqli_query($connect, "SELECT DISTINCT `Class_year` FROM `classes` WHERE 1");
        $tu = mysqli_fetch_assoc($vivod_year);
        while($row = $vivod_year->fetch_assoc()){
            ?>
            <div class = "class_parallel_year">
            <?php
                echo $row['Class_year']; 
            ?>
            КЛАСС
            </div>
<?} ?>
    </div>
            </div>
<?} ?>
    </div>
</body>

</html>