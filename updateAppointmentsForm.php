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
    include "showAppointments.php";
    ?>


    <form method="POST" action="updateAppointments.php">
        <input type="text" name="update_id" placeholder="ID запису">
        <input type="text" name="update_appoint_time" placeholder="Час запису">
        <input type="text" name="update_dentist_id" placeholder="ID лікаря">
        <input type="submit" value="Оновити запис">
    </form>

</body>

</html>