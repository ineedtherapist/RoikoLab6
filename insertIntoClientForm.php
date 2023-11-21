<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Вставка даних про клієнта</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include "showClients.php";
    ?>


    <form method="POST" action="insertIntoClients.php">
        <input type="text" name="insert_client_id" placeholder="ID клієнта">
        <input type="text" name="insert_client_name" placeholder="Ім'я клієнта">
        <input type="text" name="insert_client_lastname" placeholder="Прізвище клієнта">
        <input type="text" name="insert_client_middlename" placeholder="По батькові клієнта">
        <input type="text" name="insert_client_phone" placeholder="Номер телефону клієнта">
        <input type="date" name="insert_client_datebirth" placeholder="Дата народження клієнта">
        <input type="text" name="insert_allergies" placeholder="Наявні алергії клієнта">
        <input type="submit" name="insert" value="Додати дані про клієнта">
    </form>

</body>

</html>