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

        <head>
            <link rel="stylesheet" href="../css/web.css">
        </head>
        <header>
        <div class="pad" >
        <form class="decor" method="post">
            <div class="form-inner">
            <div class="bron">
                <label for="password" >Пароль:</label>
                <input style="margin-top: 10px;" type="password" id="password" name="password">
                <input type="submit" value="Войти">
                <?php echo $errorMessage; ?>
            </div>
            </div>
        </form>
        </div>
        </header>

    <?php
    }
    ?>

    <style>
    html {
        background: #f69a73;
        display: flex;
        justify-content: center;
        margin: 0 !important;
    padding: 0 !important;
    min-height: 100%;
    height: 100%;
    vertical-align: baseline !important;
    }
    body {
    margin: 0 !important;
    padding: 0 !important;
    vertical-align: baseline !important;
    border: 0;
    }

    
    </style>

