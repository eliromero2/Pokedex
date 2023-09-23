<?php

class MySQLDatabase {
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct() {
        $this->host = 'localhost';
        $this->username = 'root';
        $this->password = 'example';
        $this->database = 'pokedex';
        $this->connect();
    }

    public function connect() {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        mysqli_set_charset($this->connection, "utf8");
        if (!$this->connection) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function disconnect() {
        mysqli_close($this->connection);
    }

    public function getConnection() {
        return $this->connection;
    }

    public function query($sql) {
        $result = mysqli_query($this->connection, $sql);
        if (!$result) {
            die("Query failed: " . mysqli_error($this->connection));
        }
        return $result;
    }

    public function fetchAll($sql) {
        $result = $this->query($sql);
        $rows = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        $this->disconnect();

        return $rows;
    }

    public function fetchOne($sql) {
        $result = $this->query($sql);
        $row = mysqli_fetch_assoc($result);
        $this->disconnect();
        return $row;
    }
}