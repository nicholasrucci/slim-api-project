<?php

class DB {

    private $connection;

    function __construct() {
        $this->connection = new PDO("mysql:us-cdbr-iron-east-03.cleardb.net;dbname=heroku_24b42298d34bf6e", "b9017e46ee36f9", "97cd56a6");
    }

    function createStudent($student) {
        $sql = "INSERT INTO students (name, age, email, ssn) VALUES (:name, :age, :email, :ssn)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam('name', $student['name']);
        $stmt->bindParam('age', $student['age']);
        $stmt->bindParam('email', $student['email']);
        $stmt->bindParam('ssn', $student['ssn']);
        $stmt->execute();
    }

    function getStudents() {
        $sql = "SELECT * FROM students";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>