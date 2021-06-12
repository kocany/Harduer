<?php


class MDBRepository extends  Db {

//----------------------------------------------------------------------------//
    public function create($data)
    {
        $sql = "
        INSERT INTO motherboards(md_id,brand,model,price,snimka)
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
            SELECT * FROM motherboards
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
//----------------------------------------------------------------------------//
    public function getAllByTopic($topic){
        $sql = "
        SELECT * FROM motherboards
        WHERE brand LIKE CONCAT('%',:topic,'%') OR
              model LIKE CONCAT('%',:topic,'%')
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":topic", $topic, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
//----------------------------------------------------------------------------//
    public function getById($md_id){
        $sql = "
        Select * FROM motherboards WHERE md_id = :md_id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":md_id", $md_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
//----------------------------------------------------------------------------//
    public function update($data)
    {
        $sql = "
            UPDATE
             motherboards
            SET
                brand = :brand,
                model = :model,
                price = :price,
                snimka = :snimka

                WHERE md_id = :md_id
      ";

        $stmt= $this->conn->prepare($sql);
        $stmt->bindValue(":md_id", $data["md_id"],PDO::PARAM_INT);
        $stmt->bindValue(":brand", $data["brand"],PDO::PARAM_STR);
        $stmt->bindValue(":model", $data["model"],PDO::PARAM_STR);
        $stmt->bindValue(":price", $data["price"],PDO::PARAM_INT);
        $stmt->bindValue(":snimka", $data["snimka"],PDO::PARAM_STR);
        return $stmt->execute();
    }
//----------------------------------------------------------------------------//


    public function delete($md_id)
    {
        $sql = "
        DELETE FROM motherboards
            WHERE md_id = :md_id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":md_id", $md_id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
//----------------------------------------------------------------------------//
