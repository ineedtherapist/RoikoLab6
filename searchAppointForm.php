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
        $stmt = $pdo->prepare("SELECT c.name AS client_name, a.id AS appointment_id, a.appoint_time AS appointment_time, d.name AS dentist_name, cl.name AS clinic_name  FROM appointments a LEFT JOIN dentists d ON d.id = a.dentist_id LEFT JOIN clinic cl ON cl.id = a.clinic_id LEFT JOIN clients c ON c.id = a.client_id WHERE c.name LIKE :search");
        $stmt->bindParam(':search', $search);
        $stmt->execute();

        $count = $stmt->rowCount();

        if ($count > 0) {
            // Виводимо результати запиту
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                printf("<table><tr><th>Ім'я клієнта</th><th>Ідентифікатор запису</th><th>Час запису</th><th>Ім'я лікаря</th><th>Клініка</th></tr>");
                printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr></table>", $row['client_name'], $row['appointment_id'], $row['appointment_time'], $row['dentist_name'], $row['clinic_name']);
            }
        } else {
            echo "Немає результатів для вашого запиту.";
        }
    }
    ?>

    <br><br><br>

    <ul>
        <li><a href="showStudents.php">Таблиця Students</a><br></li>
        <li><a href="showGroups.php">Таблиця Groups</a><br></li>
        <li><a href="showCurators.php">Таблиця Curators</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>


</body>

</html>