<?php

// Соединение с базой данных //
session_start();
require_once 'connect.php';

// Подбор данных из формы //
$auth_login = $_POST['auth_login'];
$auth_password = $_POST['auth_password'];

// Проверяем наличие пользователя //
$sql="SELECT * FROM `users` WHERE `Login`='$auth_login' AND `Password`='$auth_password'";
$check_user = mysqli_query($connect, $sql);

// Условие определяющее роль пользователя //
if (mysqli_num_rows($check_user) > 0) {
    $role="SELECT `Role` FROM `users` WHERE `Password` = '$auth_password'";
    $check_role = mysqli_query($connect, $role);

// Если роль администратора, при успешной авторизации пользователь будет отправлен на панель администратора //
 if (($res[`Role`]) == "Администратор")
{
        header('Location: http://test/admin_panel.php');
    }

// Выбирает следующую строку из набора результатов и помещает её в массив //
$res = $check_role->fetch_array();

// Если роль учителя, при успешной авторизации пользователь будет отправлен на свою личную страницу //
    if (($res[`Role`]) == "Учитель")
    {
            header('Location: http://test/teach_panel.php');
        }
    
// Если роль ученика, при успешной авторизации пользователь будет отправлен на свою личную страницу //
    else{
        header('Location: http://test/index.php');
    }
}


?>