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
    include "showAppointments.php";
    ?>


    <form method="POST" action="insertIntoAppointments.php">
        <input type="text" name="insert_client_id" placeholder="ID клієнта">
        <input type="datetime-local" name="insert_appoint_time" placeholder="Час запису">
        <input type="text" name="insert_dentist_id" placeholder="ID лікаря">
        <input type="text" name="insert_service_id" placeholder="ID послуги">
        <input type="text" name="insert_clinic_id" placeholder="ID клініки">
        <input type="submit" name="insert" value="Вставити запис">
    </form>

</body>

</html>