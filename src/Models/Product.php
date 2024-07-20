<?php
namespace App\Models;

use App\Core\Database;

class Product{
    private $conn;

    public function __construct(){
        $this->conn =  Database::getInstance()->getConnection();
    }

    public function create($data){
        $sql = "INSERT INTO products (name,description,price,stock,category_id)
        VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_Param('ssiii',
            
            $data['name'],
            $data['description'],
            $data['price'],
            $data['stock'],
            $data['category_id']);

            return $stmt->execute();
    }

    public function list(){
        $sql = "SELECT * FROM products";
        $resul= $this->conn->query($sql);
        $pro=[];
        while($row = $resul->fetch_assoc()){
            $pro[]=$row;
        }
        return $pro;
    }



}