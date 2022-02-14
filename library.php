<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Портал | Библиотека</title>
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

    <!-- Библиотека -->
    <br>
    <div class = "library">
    <div class="scrollmenu">
<div class = "books">
<?php
 $connect = mysqli_connect("localhost", "mysql", "mysql","it&e") or die ("Ошибка". mysqli_error($conn));
        $vivod = mysqli_query($connect, "SELECT * FROM `library` WHERE 1");
        $tu = mysqli_fetch_assoc($vivod);
        while($row = $vivod->fetch_assoc()){
            ?>

  <a href="Books"><div class = "Title"> 
                <?php echo $row['Title']; ?>  
        </div>
              <div class = "Author">   
                <?php echo $row['Author']; ?>     
        </div>
        
        <div class = "Image">
            <?php $show_img = base64_encode($row['Image']);?>         
<img src="data:image/jpeg;base64, <?php echo $show_img;?>" alt=""></img>
<div class = "Description">   
                <?php echo $row['Description']; ?> 
        </div>
</div><br>
</a>

<?php
}
           
        ?>
</div>
    </div>
</body>

</html>