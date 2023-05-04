<?php
require_once "./Database.php";

$database = new Database();

$pageNumber = $_GET["page"] ?? 1;
$limit = 2;
$data = $database->selectAll(intval($limit), intval($pageNumber));

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

    <p>Total Persons : <?= $data["total"] ?></p>

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
            <?php foreach ($data["persons"] as $person) : ?>
                <tr>
                    <td><?= $person['id'] ?></td>
                    <td><?= $person['name'] ?></td>
                    <td><?= $person['age'] ?></td>
                    <td><?= $person['gender'] ?></td>
                    <td><?= $person['height'] ?></td>
                    <td><?= $person['weight'] ?></td>
                    <td><?= $person['waist'] ?></td>
                    <td><?= $person['bmi_score'] ?></td>
                    <td><?= $person['bmi_category'] ?></td>
                    <td><?= $person['rfm_score'] ?></td>
                    <td><?= $person['rfm_category'] ?></td>
                    <td><a href="/intro-pdo/edit?id=<?= $person["id"] ?>">Edit</a>| <a href="/intro-pdo/confirm?id=<?= $person["id"] ?>">Delete</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <div>

        <p>Pagination</p>
        <ul style="display: flex; gap: 20px;list-style: none;margin: 0; padding:0;">
            <?php for ($i = 1; $i <= ceil($data["total"] / $limit); $i++) : ?>
                <li><a href="/intro-pdo?page=<?= $i ?>"><?= $i ?></a></li>
            <?php endfor ?>
        </ul>
    </div>
</body>

</html>