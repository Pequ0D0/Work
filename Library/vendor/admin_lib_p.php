<?php 
    require_once('connect.php');


        $Book_name = $_POST['Book_name'];
        $Book_description = $_POST['Book_description'];
        $Book_genre = $_POST['Book_genre'];
        $Book_author = $_POST['Author'];
        $img_type = substr($_FILES['img_upload']['type'],0,5);
    if(!empty($_FILES['img_upload']['tmp_name']) and $img_type === 'image'){

        
          
        $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));

        $sql = "INSERT INTO `library` (`id_book`, `Title`, `Author`, `Image`, `Description`) VALUES (NULL, '$Book_name', '$Book_author', '$img', '$Book_description')"; 
        
		$res = mysqli_query($connect, $sql) or die (" Ошибка 1 ". mysqli_error($connect));
    
        }
        header('Location: ../index.php');
    
    $connect->close();
    ?>