<?php

class UserModel extends Model
{
    private $pdo;

    public function __construct()
    {
        $conn = $this->getConnection();
        $this->pdo = $conn;
    }

    public function create($name, $email, $tel, $password)
    {
        $sql = "INSERT INTO `user` (`name`, `email`, `tel`, `password`) VALUES (:name, :email, :tel, :password)";
        $stmt = $this->pdo->prepare($sql);
        $params = [
            ":name" => $name,
            ":email" => $email,
            ":tel" => $tel,
            ":password" => $password,
        ];

        try {
            $stmt->execute($params);
            return $this->pdo->lastInsertId() > 0;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }

    public function update() {
        
    }

    public function read($id) {
        
    }

    public function delete() {

    }
}
