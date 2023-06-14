<html>
<head>
    <title> Фильтрация продуктов по производителю </title>

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
<h2>Выберите производителя для фильтрации продуктов</h2>
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
        //$result = $mysqli->query('SELECT * FROM bt order by product'); // запрос на выборку сведений о пользователях
        $result = $mysqli->query('SELECT * FROM `bt`');
      //  print_r($result);
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
        print("<P>Общее количество продуктов: $num_rows </p>");
    ?>

        <!-- <a href="new.html" class='btn'> Add user </a> -->


        <form action="filtration.php" method="get">
            <div class="inputs">
                <div class="inpt__cont">
                    <div style="display:inline-block; align-self: center;">
                        <input type="text" name="id12" id="" value="Производитель " style="width: 130px; height: 20px;" disabled>
                        <input type="text" name="id13" id="" style="width: 50px; height: 20px;"><br><br>
                        <!-- <div class="inpt__cont"> -->
                            <input name="add" type="submit" class='btn' value="Далее" style="width: 270px; display:inline-block; margin-left: 20px; align-self: center; margin-right: 20px;">
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </form>

        <a href="main.php" class='btn' style="background-color: #2E8B57"> Назад </a>
        </main>
    </div>
</body>
</html>
