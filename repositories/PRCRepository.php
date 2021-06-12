<?php


class PRCRepository extends  Db {

//----------------------------------------------------------------------------//
    public function create($data)
    {
        $sql = "
        INSERT INTO processors(prc_id,brand,model,price,snimka)
        VALUES (NULL, :brand, :model, :price, :snimka);
        ";


        $stmt= $this->conn->prepare($sql);
        $stmt->bindValue(":brand", $data["brand"],PDO::PARAM_STR);
        $stmt->bindValue(":model", $data["model"],PDO::PARAM_STR);
        $stmt->bindValue(":price", $data["price"],PDO::PARAM_INT);
        $stmt->bindValue(":snimka", $data["snimka"],PDO::PARAM_STR);
        return $stmt->execute();
    }
//----------------------------------------------------------------------------//
    public function getAll()
    {
        $sql = "
            SELECT * FROM processors
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
//----------------------------------------------------------------------------//
    public function getAllByTopic($topic){
        $sql = "
        SELECT * FROM processors
        WHERE brand LIKE CONCAT('%',:topic,'%') OR
              model LIKE CONCAT('%',:topic,'%')
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":topic", $topic, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
//----------------------------------------------------------------------------//
    public function getById($prc_id){
        $sql = "
        Select * FROM processors WHERE prc_id = :prc_id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":prc_id", $prc_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
//----------------------------------------------------------------------------//
    public function update($data)
    {
        $sql = "
            UPDATE
             processors
            SET
                brand = :brand,
                model = :model,
                price = :price,
                snimka = :snimka

                WHERE prc_id = :prc_id
      ";

        $stmt= $this->conn->prepare($sql);
        $stmt->bindValue(":prc_id", $data["prc_id"],PDO::PARAM_INT);
        $stmt->bindValue(":brand", $data["brand"],PDO::PARAM_STR);
        $stmt->bindValue(":model", $data["model"],PDO::PARAM_STR);
        $stmt->bindValue(":price", $data["price"],PDO::PARAM_INT);
        $stmt->bindValue(":snimka", $data["snimka"],PDO::PARAM_STR);
        return $stmt->execute();
    }
//----------------------------------------------------------------------------//


    public function delete($prc_id)
    {
        $sql = "
        DELETE FROM processors
            WHERE prc_id = :prc_id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":prc_id", $prc_id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
//----------------------------------------------------------------------------//
