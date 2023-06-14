<html>
    <head>
        <title> Добавление новых продуктов </title>
    </head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600&family=Poppins:wght@100;200;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <body>

        <div class="wrapper">
            <main class="main">
                <!-- <h2>Adding new player:</h2> -->

    <?php
        $link = mysqli_connect("localhost", "root", "root", "magazin_bt");
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
        $mysqli = new mysqli("localhost", "root", "root", "magazin_bt"); // коннект с сервером бд
        $mysqli->set_charset("utf8mb4"); // задаем кодировку
        $result = $mysqli->query('SELECT * FROM bt');
        $num_rows = mysqli_num_rows($result);
        if ($num_rows < 12){
            echo('
            <h2>Добавление новых продуктов:</h2>
            <form action="save_new.php" metod="get">
                <div class="inputs">

                    <div class="inpt__cont">
                        <label>Продукт:</label> <input name="product" size="50" type="text"">
                    </div>

                    <div class="inpt__cont">
                        <label>Производитель:</label> <input name="manufacturer" size="20" type="text" pattern="[A-Za-zА-Яа-яЁ-ё]{2,}" title="русские или латинские символы, не меньше 2 символов">
                    </div>

                    <div class="inpt__cont">
                        <label>Гарантия (м):</label> <input name="guarantee" size="20" type="number" min="0" max="120" step="1">
                    </div>

                    <div class="inpt__cont">
                        <label>Цена:</label> <input name="price" size="30" type="number" min="1000.00" max="999999.99" step="0.01">
                    </div>

                </div>

                <div class="inpt__cont">
                    <input name="add" type="submit" value="Добавить">
                    <input name="b2" type="reset" value="Очистить">
                </div>
            </form>
            ');
        }
        else {
            echo('
            <h2>Невозможно ввести данноне количество продуктов</h2>
            <p>Максимальное число продуктов - 12.</p>
            <p>Для добавления новых продуктов прийдется удалить часть старых.</p>
            <br>
            ');
        }
    ?>


                <!-- <form action="save_new.php" metod="get">
                    <div class="inputs">

                        <div class="inpt__cont">
                            <label>surname:</label> <input name="surname" size="50" type="text" pattern="[A-Za-z]{2,}" title="English letters only, min 2 symbols">
                        </div>

                        <div class="inpt__cont">
                            <label>hometown:</label> <input name="hometown" size="20" type="text" pattern="[A-Za-z]{2,}" title="English letters only, min 2 symbols">
                        </div>

                        <div class="inpt__cont">
                            <label>height (sm):</label> <input name="height_sm" size="20" type="number" min="150" max="210" step="1">
                        </div>

                        <div class="inpt__cont">
                            <label>weight:</label> <input name="weight" size="30" type="number" min="50" max="110" step="0.1" lang="en">
                        </div>

                    </div>

                    <div class="inpt__cont">
                        <input name="add" type="submit" value="Add">
                        <input name="b2" type="reset" value="Clear">
                    </div>
                </form> -->
                <a href="main.php" class='btn' style="background-color: #2E8B57"> Назад </a>
            </main>
        </div>
    </body>
</html>
