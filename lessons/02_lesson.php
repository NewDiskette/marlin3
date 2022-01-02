
<form enctype="multipart/form-data" action="controllers/02/02_controller_4.php" method="post">
    <input type="file" name="image">
    <button type="submit">Загрузить</button>
</form>

<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
<!-- <form enctype="multipart/form-data" action="controllers/02_controller.php" method="POST"> -->
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    <!-- Отправить этот файл: <input name="userfile" type="file" /> -->
    <!-- <input type="submit" value="Отправить файл" /> -->
<!-- </form> --> 