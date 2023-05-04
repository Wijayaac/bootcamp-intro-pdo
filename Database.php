<?php
require_once "./MysqlConnection.php";
require_once "./helpers/redirect.php";
class Database
{
    private $connection;

    public function __construct()
    {
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

        $this->connection = $mysqlConnection->getConnection();
    }
    public function selectAll($limit, $offset)
    {
        $query = $this->connection->query("SELECT * FROM persons LIMIT {$limit} OFFSET {$offset}");
        $data = [
            "persons" => $query->fetchAll()
        ];
        return $data;
    }
    public function getTotal()
    {
        $total = $this->connection->query("SELECT * FROM persons")->rowCount();
        return $total;
    }
    public function selectSpecified($id)
    {
        $query = $this->connection->query("SELECT * FROM persons WHERE id='{$id}'");
        return $query->fetch();
    }
    public function save($data)
    {
        $this->connection->query("INSERT INTO persons (`id`, `name`, `age`, `gender`, `height`, `weight`, `waist`) VALUES (NULL,'{$data["name"]}','{$data["age"]}','{$data["gender"]}','{$data["height"]}','{$data["weight"]}','{$data["waist"]}')");
        redirect("/intro-pdo");
    }
    public function update($id, $data)
    {
        $this->connection->query("UPDATE persons SET `name` = '{$data["name"]}', `age` = '{$data["age"]}', `gender` = '{$data["gender"]}',`height` = '{$data["height"]}',`weight` = '{$data["weight"]}',`waist` = '{$data["waist"]}' WHERE id = '{$id}'");

        redirect("/intro-pdo");
    }
    public function delete($id)
    {
        $this->connection->query("DELETE FROM persons WHERE `persons`.`id` = '{$id}'");
        redirect("/intro-pdo");
    }
}
