<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Валентинки у формі серця</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="valentine.css">

</head>
<body>
    <?php 
    if (isset($_POST['show_valentines'])) {
        // Виведення валентинок
        echo "<div class='container'>";
        $a = 1;
        while ($a <= 9) {
            echo "<div class='card'>
            <div class='card-inner'>
                <!-- Червоне серце -->
                <div class='card-front'>
                    <div class='red-heart'>
                        <p>💖 Валентинка $a 💖</p>
                    </div>
                </div>
                <!-- Біле серце -->
                <div class='card-back'>
                    <div class='white-heart'>
                        <p>З любов'ю! ❤️</p>
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
            <p class='welcome-text' >Вам прийшли валентинки! Хотіли б ви їх побачити?</p>
            <form method='post'>
                <button type='submit' name='show_valentines'>Так</button>
            </form>
        </div>";
    }
    ?>
</body>
</html>
