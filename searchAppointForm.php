<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Пошук запису</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Пошук запису</h1>

    <form method="POST" action="">
        <input type="text" name="search_appoint" placeholder="Ім'я клієнта">
        <input type="submit" value="Пошук запису">
    </form>

    <?php
    include "databaseConnect.php";

    if (isset($_POST['search_appoint']) && !empty($_POST['search_appoint'])) {
        $search = "%" . $_POST['search_appoint'] . "%";;
        $stmt = $pdo->prepare("SELECT c.name AS client_name, a.id AS appointment_id, a.appoint_time AS appointment_time, s.name AS service_name, d.name AS dentist_name, cl.name AS clinic_name  FROM appointments a LEFT JOIN dentists d ON d.id = a.dentist_id LEFT JOIN clinic cl ON cl.id = a.clinic_id LEFT JOIN services s ON s.id = a.service_id LEFT JOIN clients c ON c.id = a.client_id WHERE c.name LIKE :search");
        $stmt->bindParam(':search', $search);
        $stmt->execute();

        $count = $stmt->rowCount();

        if ($count > 0) {
            // Виводимо результати запиту
            printf("<table><tr><th>Ім'я клієнта</th><th>Ідентифікатор запису</th><th>Послуга</th><th>Час запису</th><th>Ім'я лікаря</th><th>Клініка</th></tr>");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['client_name'], $row['appointment_id'], $row['service_name'] ,$row['appointment_time'], $row['dentist_name'], $row['clinic_name']);
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