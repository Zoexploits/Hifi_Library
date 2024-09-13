<?php
namespace App\Models;

use App\Core\Model;

class Level extends Model {
    
    // FECTH levels ASS AN ASSOCO
    public function getAllLevels() {
        $result = $this->db->query("SELECT * FROM levels");
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    public function getLevelById($id) {
        $stmt = $this->db->prepare("SELECT * FROM levels WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function addLevel($data) {
        $stmt = $this->db->prepare("INSERT INTO levels (level) VALUES (?)");
        $stmt->bind_param("i", $data['level']);
        return $stmt->execute();
    }

    public function updateLevel($id, $data) {
        $stmt = $this->db->prepare("UPDATE levels SET level = ? WHERE id = ?");
        $stmt->bind_param("ii", $data['level'], $id);
        return $stmt->execute();
    }

    public function deleteLevel($id) {
        $stmt = $this->db->prepare("DELETE FROM levels WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

?>