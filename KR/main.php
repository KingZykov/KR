<html>
<head>
    <title> Главная </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600&family=Poppins:wght@100;200;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


</head>
<body>

<script>
    var closeSite = function() {
        console.log(2);
        // openedWindow = window.open('index.php');
        // openedWindow.close();
        window.close();
    }
</script>

<?php
// Ищем возможные ошибки
$link = mysqli_connect("localhost", "root", "root", "magazin_bt");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
$mysqli = new mysqli("localhost", "root", "root", "magazin_bt"); // коннект с сервером бд
$mysqli->set_charset("utf8mb4"); // задаем кодировку
$result = $mysqli->query('SELECT * FROM bt');
$num_rows = mysqli_num_rows($result);
?>


    <div class="wrapper">
        <main class="main-f">
            <h2>Главная</h2>
            <a href="show_table.php" class='btn-f'> Просмотр Таблицы </a>
            <a href="new.php" class='btn-f'> Добавление Продукта </a>
            <a href="show_table_for_delete.php" class='btn-f'> Удаление Продукта </a>
            <a href="show_sorting_variants.php" class='btn-f'> Сортировка Продукта </a>
            <a href="show_filtration.php" class='btn-f'> Фильтрация </a>
            <a href="show_transform.php" class='btn-f'> Трансформация </a>
            <a href="#" onclick="closeSite()" class='btn-f' style="background-color: #DC143"> Выйти </a>
        </main>
    </div>
</body>
</html>
