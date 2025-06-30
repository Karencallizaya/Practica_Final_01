
<?php
require_once 'config/database.php';

class Asistencia {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM asistencias");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM asistencias WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO asistencias (nombre, hora, fecha, estado, observaciones) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$data['nombre'], $data['hora'], $data['fecha'], $data['estado'], $data['observaciones']]);
    }

    public function update($id, $data) {
        $stmt = $this->db->prepare("UPDATE asistencias SET nombre=?, hora=?, fecha=?, estado=?, observaciones=? WHERE id=?");
        return $stmt->execute([$data['nombre'], $data['hora'], $data['fecha'], $data['estado'], $data['observaciones'], $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM asistencias WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
