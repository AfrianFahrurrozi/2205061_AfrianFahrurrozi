<?php

namespace App\Models;

use App\Core\Model;

class Motors extends Model
{

      public function show()
      {
            $query = "SELECT * FROM tb_motors";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }

      public function save()
      {
            $merek = $_POST['merek'];
            $harga = $_POST['harga'];
            $tipe = $_POST['tipe'];
            $plate = $_POST['plate'];

            $sql = "INSERT INTO tb_motors
            SET merek=:merek, harga=:harga, tipe=:tipe, plate=:plate";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":merek", $merek);
            $stmt->bindParam(":harga", $harga);
            $stmt->bindParam(":tipe", $tipe);
            $stmt->bindParam(":plate", $plate);

            $stmt->execute();
      }

      public function edit($id)
      {
            $query = "SELECT * FROM tb_motors WHERE id=:id";
            $stmt = $this->db->prepare($query);

            $stmt->bindParam(":id", $id);
            $stmt->execute();

            return $this->select($stmt);
      }

      public function update()
      {
            $merek = $_POST['merek'];
            $harga = $_POST['harga'];
            $tipe = $_POST['tipe'];
            $plate = $_POST['plate'];
            $id = $_POST['id'];

            $sql = 'UPDATE tb_motors SET merek=:merek, harga=:harga, tipe=:tipe, plate=:plate WHERE id=:id';
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":merek", $merek);
            $stmt->bindParam(":harga", $harga);
            $stmt->bindParam(":tipe", $tipe);
            $stmt->bindParam(":plate", $plate);
            $stmt->bindParam(":id", $id);

            $stmt->execute();
      }

      public function delete($id)
      {
            $sql = "DELETE FROM tb_motors WHERE id=:id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->execute();
      }
}
