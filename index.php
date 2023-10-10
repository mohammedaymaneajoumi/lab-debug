<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $servername = "localhost:3306";
    $username = "root";
    $password = '../SQLin$tall';
    $dbname = "labdbug";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=" . $dbname, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";

        $sql = "SELECT * FROM `stagiaires`";
        $result = $conn->query($sql);

        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Full Name</th><th>Email</th></tr>";

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['full_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }


    // phpinfo();



    ?>
</body>

</html>