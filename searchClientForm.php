<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Пошук клієнта</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Пошук клієнта</h1>

    <form method="POST" action="">
        <input type="text" name="search_client" placeholder="Ім'я клієнта">
        <input type="submit" value="Пошук клієнта">
    </form>

    <?php
    include "databaseConnect.php";

    if (isset($_POST['search_client']) && !empty($_POST['search_client'])) {
        $search = "%" . $_POST['search_client'] . "%";;
        $stmt = $pdo->prepare("SELECT c.id AS client_id, c.name AS client_name, c.lastname AS lastname,
        c.middlename AS middlename, c.phone_number AS phone, c.date_birth AS date_birth, c.allergies AS allergies
        FROM clients c WHERE c.name LIKE :search");
        $stmt->bindParam(':search', $search);
        $stmt->execute();

        $count = $stmt->rowCount();

        if ($count > 0) {
            // Виводимо результати запиту
            printf("<table><tr><th>Ідентифікатор клієнта</th><th>Ім'я клієнта</th><th>Прізвище клієнта</th><th>По батькові</th><th>Номер телефону</th><th>Алергії</th></tr>");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['client_id'], $row['client_name'], $row['lastname'] ,$row['middlename'], $row['phone'], $row['allergies']);
            }
            printf("</table>");
        }
        else {
            echo "Немає результатів для вашого запиту.";
        }
    }
    ?>

    <br><br><br>

    <ul>
        <li><a href="showAppointments.php">Таблиця Appointments</a><br></li>
        <li><a href="showClinic.php">Таблиця Clinic</a><br></li>
        <li><a href="showClients.php">Таблиця Clients</a><br></li>
        <li><a href="showDentists.php">Таблиця Dentists</a><br></li>
        <li><a href="showServices.php">Таблиця Services</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>


</body>

</html>