<form enctype="multipart/form-data" action="/index.php/jlpt/update/f" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    	
<input type="checkbox" name = "CB">С переводом<br>
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Отправить файл" />
</form>

<?php 
// echo $ss;