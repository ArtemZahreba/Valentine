<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Валентинкa</title>
    <link rel="icon" type="image/png" href="hert.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="valentine.css">
</head>
<body>
    <?php
    // Зчитуємо JSON файл
    $valentines = json_decode(file_get_contents('valentines.json'), true);

    if (isset($_POST['show_valentines'])) {
        // Виведення валентинок
        echo "<div class='container'>";
        
        // Перевіряємо масив та проходимо через кожен елемент
        $a = 1;
        foreach ($valentines as $key => $value) {
            // Виводимо валентинку з використанням ключа та значення з JSON
            echo "<div class='card'>
                    <div class='card-inner'>
                        <!-- Червоне серце -->
                        <div class='card-front'>
                            <div class='red-heart'>
                                <p>💖 $key 💖</p>  <!-- Виводимо ключ -->
                            </div>
                        </div>
                        <!-- Біле серце -->
                        <div class='card-back'>
                            <div class='white-heart'>
                                <p>$value</p>  <!-- Виводимо значення -->
                            </div>
                        </div>
                    </div>
                  </div>";
            $a++;
        }

        echo "</div>";
    } else {
        // Початковий екран
        echo "
        <div class='heart'>
            <p class='welcome-text'>Вам прийшли валентинки! Хотіли б ви їх побачити?</p>
            <form method='post'>
                <button type='submit' name='show_valentines'>Так</button>
            </form>
        </div>";
    }
    ?>

    <footer>
        <p>Розроблено <a href="https://artemzahreba.pythonanywhere.com/resume/en" target="_blank">Artem Zahreba</a></p>
    </footer>
</body>
</html>
