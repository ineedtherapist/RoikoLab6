<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Видалення даних</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include "showAppointments.php";
    ?>


    <form method="POST" action="deleteFromAppointments.php">
        <input type="text" name="delete_id" placeholder="Введіть ID запису для видалення">
        <input type="submit" value="Видалити прийом">
    </form>

</body>
</html>