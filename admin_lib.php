<div class = "reg_form">
<form action="vendor/admin_lib_p.php" method="post" enctype="multipart/form-data">
<div class="input__text">Название книги:</div>
                        <input name = "Book_name" class = "input" required>
                        <div class="Book_description">Описание:</div>
                        <textarea name="Book_description" id="" cols="50" rows="12" required></textarea>
                        <div class="input__text">Жанр:</div>
                        <textarea name="Book_genre" id="" cols="50" rows="2" required></textarea>
                        <div class="input__text">Автор:</div>
                        <textarea name="Author" id="" cols="50" rows="2" required></textarea>
                        <div class="input__text">Обложка:</div>
                        <input type="file" name = "img_upload">
                        <input type="submit" name="upload" id="" value = "Загрузить">
                        </div>
    <br>
    </form>