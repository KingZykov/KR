<html>
<head>
<title> Удаление пользовательских данных </title>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600&family=Poppins:wght@100;200;400;600;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
mysqli_connect("localhost", "root", "root", "magazin_bt") or die ("Невозможно подключиться к серверу");

print'

    <div class="wrapper">
        <main class="main">
';


$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url_dec = rawurldecode($url);
$id8 = mb_split("=", $url_dec);


$zapros="DELETE FROM bt WHERE product='" . $id8[1] ."'";

$link = mysqli_connect("localhost", "root", "root", "magazin_bt");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
$mysqli = new mysqli("localhost", "root", "root", "magazin_bt"); // коннект с сервером бд
$mysqli->set_charset("utf8mb4"); // задаем кодировку
$result = $mysqli->query($zapros);

$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


if ($link == false) {
    echo("Ошибка подключения");
}
else {
    print("<br>" . $zapros);
    $result = mysqli_query($link, $zapros, MYSQLI_USE_RESULT);
    if ($result == false) {
        print "<p>Ошибка удаления </p>";
    } else {
        print '<p>Продукт удален </p>';
    }
    print "<a href=\"main.php\" class=btn> Назад </a>";
}

print '</main></div>';
?>
</body>
</html>
