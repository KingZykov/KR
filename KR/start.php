<html>
<head>
    <title> Стартовая страница </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600&family=Poppins:wght@100;200;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">




</head>
<body>

<script>
    var openSite = function() {
        console.log(1);
        openedWindow = window.open('main.php');
        // openedWindow.close();
        // window.close();
    }
</script>

<?php

// Ищем возможные ошибки
$link = mysqli_connect("localhost", "root", "root", "users");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
$mysqli = new mysqli("localhost", "root", "root", "users"); // коннект с сервером бд
$mysqli->set_charset("utf8mb4"); // задаем кодировку

?>
    <div class="wrapper">
        <main class="main-f">
            <a href="#" onclick="openSite()" class='btn-f' style="margin-top: 120px; height: 200px; line-height: 180px; box-sizing: border-box; font-size: 30px"> Открыть </a>
        </main>
    </div>
</body>
</html>
