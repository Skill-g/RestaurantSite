
<?php
$host = '31.31.196.177';
$dbname = 'u1486089_rest';
$username = 'u1486089_rest';
$password = 'rP1jI4pL8cuK3oN1';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT id, name, phone, email, date, time, message FROM bookings ORDER BY id DESC");
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $form_id = $row['id']; 
        $name = $row['name'];
        $phone = $row['phone'];
        $email = $row['email'];
        $date = $row['date'];
        $time = $row['time'];
        $message = $row['message'];
?>
<html>
    <head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="shortcut icon" href="../img/free-icon-restaurant-562678.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/web.css">
    </head>
</html>
<div class="pad container3 bounceInUp wow" id="bron">
  <form class="decor" method="post" id="myForm" readonly>
    <div class="form-left-decoration"></div>
    <div class="form-right-decoration"></div>
    <div class="circle"></div>
    <div class="form-inner">
      <h3></h3>
      <div class="bron">
        <h1>Бронирование</h1>
      </div>
      <input type="text" name="name" placeholder="Не заполнено" value="<?php echo $name; ?>" readonly>
      <input type="text" name="phone" placeholder="Не заполнено" maxlength="18" onkeypress="formatPhone(event, this)" value="<?php echo $phone; ?>" readonly>
      <input type="text" name="email" placeholder="Не заполнено" required value="<?php echo $email; ?>" readonly>
      <input type="text" name="date" placeholder="Не заполнено" required value="<?php echo $date; ?>" readonly>
      <input type="text" name="time" placeholder="Не заполнено" required value="<?php echo $time; ?>" readonly>
      <textarea name="message" placeholder="Не заполнено" rows="3" readonly><?php echo $message; ?></textarea>

    </div>
  </form>
</div>
<?php
    }
} catch (PDOException $e) {
    die("Failed to connect to database: " . $e->getMessage());
}
?>

<style>
#bron {
    display: inline-block; 
    margin-right: 5%;
    vertical-align: middle;
}
html {
    background-color: #f69a73;
}
</style>



