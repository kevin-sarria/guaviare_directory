<?php

require_once __DIR__ . "/../database/Connection.php";

class User {

    public $id;
    public $username;
    public $email;
    public $password;
    public $id_type_user;
    public $token;
    public $created_at;

    private $connection;

    public function __construct($args = [])
    {
        $this->id = $args["id"] ?? null;
        $this->username = $args["username"] ?? "";
        $this->email = $args["email"] ?? "";
        $this->password = $args["password"] ?? "";
        $this->id_type_user = $args["id_type_user"] ?? "";
        $this->token = $args["token"] ?? "";
        $this->created_at = $args["created_at"] ?? "";

        $this->connection = Connection::connect();
    }

    public function save() {
        // Insertar en la base de datos
        $sql = "INSERT INTO users (username, email, password, id_type_user, token) VALUES (:username, :email, :password, :id_type_user, :token)";
        $stmt = $this->connection->prepare($sql);

        try {
            $stmt->execute([
                ':username' => $this->username,
                ':email' => $this->email,
                ':password' => $this->password,
                ':id_type_user' => $this->id_type_user,
                ':token' => $this->token
            ]);
        } catch (PDOException $e) {
            die("Error al registrar: " . $e->getMessage());
        }
    }

    public function findByEmail($email) {
        $connection = Connection::connect();
        // Buscar el usuario en la base de datos
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $connection->prepare($sql);
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public function update() {

    }

    public function delete() {

    }

}