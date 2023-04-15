<?php
$password = "1234";
$errorMessage = "";

if (isset($_POST["password"]) && $_POST["password"] == $password) {
    // Устанавливаем session_id равным значению cookie
    session_id($_COOKIE['PHPSESSID']);
    session_start();
    setcookie('authenticated', 'true', time() + (24 * 60 * 60), '/');

    // Редирект на защищенную страницу
    header("Location: /php/admin.php");
    exit;
} else {
    // Вывод формы для ввода пароля
    if (isset($_POST["password"])) {
        // Вывод сообщения об ошибке
        $errorMessage = "<p>Неверный пароль</p>";
    }
?>
        <html>
        <head>
            <link rel="stylesheet" href="../css/web.css">
        </head>
        <div class="pad container3 bounceInUp wow" id="bron">
        <div class="form-left-decoration"></div>
        <form class="decor" method="post">
            <div class="form-right-decoration"></div>
            <div class="circle"></div>
            <div class="form-inner">
            <h3></h3>
            <div class="bron">
                <label for="password" >Пароль:</label>
                <input style="margin-top: 10px;" type="password" id="password" name="password">
                <input type="submit" value="Войти">
                <?php echo $errorMessage; ?>
            </div>
            </div>
        </form>
        </div>
        </html>
    <?php
    }
    ?>

    <style>
    html {
        background: #f69a73;
        display: flex;
        justify-content: center;
    }
    </style>

