<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include "showStudents.php";
    ?>


    <form method="POST" action="insertIntoStudents.php">
        <input type="text" name="insert_name" placeholder="Ім'я студента">
        <input type="text" name="insert_group_id" placeholder="ID групи">
        <input type="submit" name="insert" value="Вставити студента">
    </form>

</body>

</html>