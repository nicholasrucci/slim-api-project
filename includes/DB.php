<?php

class DB {

    private $connection;

    function __construct() {
        $this->connection = new PDO("");
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