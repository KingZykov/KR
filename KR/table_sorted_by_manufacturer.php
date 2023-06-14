<html>
<head>
    <title> Сортировка По Производителю </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600&family=Poppins:wght@100;200;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


</head>
<body>

<?php
    $link = mysqli_connect("localhost", "root", "root", "magazin_bt");
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
    $mysqli = new mysqli("localhost", "root", "root", "magazin_bt"); // коннект с сервером бд
    $mysqli->set_charset("utf8mb4"); // задаем кодировку
?>

<div class="wrapper">
<main class="main">
<h2>Список продуктов, отсортированных по производителю:</h2>
<table border="1">
    <!--  // вывод «шапки» таблицы -->
    <thead>
        <tr class='sticky'>
          <th> товар </th>
          <th> производитель </th>
          <th> гарантия (м) </th>
          <th> цена </th>
        </tr>
    </thead>
    <?php
    $sql_add = "Select * from " . $_GET['table9'];
        // $sql_add = "SELECT * FROM players order by " . $_GET['sorting'];
        // print($sql_add);
        $result = $mysqli->query('SELECT * FROM bt order by manufacturer'); // запрос на выборку сведений о пользователях
        while ($row = mysqli_fetch_array($result)) {// для каждой строки из запроса
            echo "<tr>";
                echo "<td>";
                print($row['product']);
                echo "</td>";
                echo "<td>";
                print($row['manufacturer']);
                echo "</td>";
                echo "<td>";
                print($row['guarantee']);
                echo "</td>";
                echo "<td>";
                // print($row['weight']);
                print(number_format($row['price'], 2));
                echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $num_rows = mysqli_num_rows($result); // число записей в таблице БД
        // print("<P>Total number of players: $num_rows </p>");
    ?>

        <!-- <a href="new.html" class='btn'> Add user </a> -->
        <a href="show_sorting_variants.php" class='btn' style='background-color: #2E8B57'> Назад </a>
        </main>
    </div>
</body>
</html>
