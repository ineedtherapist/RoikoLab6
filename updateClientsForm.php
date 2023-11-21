<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Оновлення даних про клієнта</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include "showClients.php";
    ?>


    <form method="POST" action="updateClients.php">
        <input type="text" name="update_id" placeholder="ID клієнта">
        <input type="text" name="update_phone" placeholder="Номер телефону клієнта">
        <input type="text" name="update_allergies" placeholder="Наявні алергії клієнта">
        <input type="submit" value="Оновити дані про клієнта">
    </form>

</body>

</html>