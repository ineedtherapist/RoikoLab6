<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Оновлення даних</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include "showStudents.php";
    ?>


    <form method="POST" action="updateStudents.php">
        <input type="text" name="update_id" placeholder="ID студента">
        <input type="text" name="update_name" placeholder="Ім'я студента">
        <input type="text" name="update_group_id" placeholder="ID групи">
        <input type="submit" value="Оновити студента">
    </form>

</body>

</html>