<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Пошук студента</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Пошук студента</h1>

    <form method="POST" action="">
        <input type="text" name="search_student" placeholder="Частина імені студента">
        <input type="submit" value="Пошук студента">
    </form>

    <?php
    include "databaseConnect.php";

    if (isset($_POST['search_student']) && !empty($_POST['search_student'])) {
        $search = "%" . $_POST['search_student'] . "%";;
        $stmt = $pdo->prepare("SELECT s.name AS student_name, g.name AS group_name FROM students s LEFT JOIN groups g ON s.group_id = g.id WHERE s.name LIKE :search");
        $stmt->bindParam(':search', $search);
        $stmt->execute();

        $count = $stmt->rowCount();

        if ($count > 0) {
            // Виводимо результати запиту
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo " Ім'я: " . $row['student_name'] . ". Група: " . $row['group_name'] . "<br>";
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