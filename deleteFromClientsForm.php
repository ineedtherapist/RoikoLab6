<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Видалення даних про клієнта</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include "showClients.php";
    ?>


    <form method="POST" action="deleteFromClients.php">
        <input type="text" name="delete_id" placeholder="Введіть ID клієнта для видалення">
        <input type="submit" value="Видалити дані про клієнта>
    </form>

</body>
</html>