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
    include "showStudents.php";
    ?>


    <form method="POST" action="deleteFromStudents.php">
        <input type="text" name="delete_id" placeholder="ID студента для видалення">
        <input type="submit" value="Видалити студента">
    </form>

</body>
</html>