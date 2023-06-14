<html>
<head>
    <title> Информация о продуктах </title>

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
<h2>Список Продуктов:</h2>
<p>Введите скидку на продукцию</p>
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
        $result = $mysqli->query('SELECT * FROM bt'); // запрос на выборку сведений о пользователях
        while ($row = mysqli_fetch_array($result)) {// для каждой строки из запроса
    //      $proc=($row['price']/100)*10;
            echo "<tr>";
                echo "<td>";
                print($row['product']);
                echo "</td>";
                echo "<td>";
                print($row['manufacturer']);
                echo "</td>";
                echo "<td style='text-align: center'>";
                print(number_format(($row['guarantee']), 0));
                echo "</td>";
                echo "<td>";
                // print($row['weight']);
            //    print(number_format(($row['price']-($proc)), 2));
                  print(number_format(($row['price']), 2));
                echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $num_rows = mysqli_num_rows($result); // число записей в таблице БД
        // print("<P>Total number of players: $num_rows </p>");
    ?>

    <form action="transform.php" method="get">
        <div class="inputs">
            <div class="inpt__cont">
                <div style="display:inline-block; align-self: center;">
                    <input type="text" name="id10" id="" value="Скидка в процентах " style="price: 20px;" disabled>
                    <input type="number" name="id11" id="" min="5" max="80" style="width: 50px; price: 20px;"><br><br>
                    <!-- <div class="inpt__cont"> -->
                        <input name="add" type="submit" class='btn' value="Показать результат" style="width: 270px; display:inline-block; margin-left: 20px; align-self: center; margin-right: 20px;">
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </form>

        <!-- <a href="new.html" class='btn'> Add user </a> -->
        <a href="main.php" class='btn' style="background-color: #2E8B57"> Назад </a>
        </main>
    </div>
</body>
</html>
