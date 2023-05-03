<?php

require_once "./MysqlConnection.php";

$config = [
    "host" => "127.0.0.1",
    "database" => "db_medical_records",
    "user" => "root",
    "password" => ""
];

$mysqlConnection = new MYSQLConnection(
    $config['host'],
    $config['database'],
    $config['user'],
    $config['password']
);

$connection = $mysqlConnection->getConnection();

$query = $connection->query("SELECT * FROM persons");

$patients = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>

<body>
    <h1>Body Mass Index(BMI) and Relative Mass(RFM) Category Calculator</h1>

    <a href="/intro-pdo/create">Insert Data</a>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Height(cm)</th>
                <th>Weight (kg)</th>
                <th>Waist Size(cm)</th>
                <th>BMI Score</th>
                <th>BMI Category</th>
                <th>RFM Score</th>
                <th>RFM Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($patients as $patient) : ?>
                <tr>
                    <td><?= $patient['id'] ?></td>
                    <td><?= $patient['name'] ?></td>
                    <td><?= $patient['age'] ?></td>
                    <td><?= $patient['gender'] ?></td>
                    <td><?= $patient['height'] ?></td>
                    <td><?= $patient['weight'] ?></td>
                    <td><?= $patient['waist'] ?></td>
                    <td><?= $patient['bmi_score'] ?></td>
                    <td><?= $patient['bmi_category'] ?></td>
                    <td><?= $patient['rfm_score'] ?></td>
                    <td><?= $patient['rfm_category'] ?></td>
                    <td><a href="">Edit</a>| <a href="">Delete</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>