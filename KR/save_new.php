<html>
    <head>
        <title> Добавление новых продуктов </title>
    </head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600&family=Poppins:wght@100;200;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <body>

<?php
print '

    <div class="wrapper">
        <main class="main">
';

$link = mysqli_connect("localhost", "root", "root", "magazin_bt");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
$mysqli = new mysqli("localhost", "root", "root", "magazin_bt"); // коннект с сервером бд
$mysqli->set_charset("utf8mb4"); // задаем кодировку

$sql_add = "INSERT INTO bt SET product='" . $_GET['product'] ."', manufacturer='".$_GET['manufacturer']. "', guarantee='".$_GET['guarantee']."', price='" .$_GET['price']."'";


if ($link == false) {
    echo("Connection failed");
}
else {
    print($sql_add);
    $result = mysqli_query($link, $sql_add, MYSQLI_USE_RESULT);
    if ($result == false) {
        print "

        ";

    } else {
        print "

            <p>Продукт добавлен</p>
        ";
    }
    print "<a href=\"main.php\" style='background-color: #2E8B57'> Вернуться в меню </a>";
}

print "</main></div>";
?>




</body>
</html>
