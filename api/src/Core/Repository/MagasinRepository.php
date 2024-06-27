<?php
namespace Api\Core\Repository;

use Api\Core\Interface\AbstractRepositoryInterface;
use PDO;
use PDOException;

class MagasinRepository implements AbstractRepositoryInterface
{
    private $pdo;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function findAll()
    {
        $stmt = $this->pdo->query('SELECT * FROM magasins');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createMagasin($data) 
    {
        $stmt = "INSERT INTO magasins (name, address) VALUES (:name, :address)";
        try {
            $statement = $this->pdo->prepare($stmt);
            $statement->execute(array(
                'name' => $data['name'],
                'address'  => $data['address'],
            ));
            
            return $statement->rowCount();
        } catch (PDOException $e) {
            exit($e->getMessage());
        } 
    }

    public function findOne($id) 
    {
        $stmt = $this->pdo->query("SELECT * FROM magasins WHERE id=$id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateOne($id, $data) 
    {
        $stmt = "UPDATE INTO magasins SET name = :name, address= :address WHERE id=:id";
        try {
            $statement = $this->pdo->prepare($stmt);
            $statement->execute(array(
                'id' => $id,
                'name' => $data['name'],
                'address'  => $data['address'],
            ));
            
            return $statement->rowCount();
        } catch (PDOException $e) {
            exit($e->getMessage());
        } 
    }

    public function deleteOne($id)
    {
        $stmt = "DELETE FROM magasins WHERE id= :id";
        try {
            $statement = $this->pdo->prepare($stmt);
            $statement->execute(array(
                'id' => $id
            ));
            
            return $statement->rowCount();
        } catch (PDOException $e) {
            exit($e->getMessage());
        } 
    }

}