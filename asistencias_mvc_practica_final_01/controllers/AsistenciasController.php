
<?php
require_once 'models/Asistencia.php';

class AsistenciasController {
    private $model;

    public function __construct() {
        $this->model = new Asistencia();
    }

    public function handleRequest() {
        $action = $_GET['action'] ?? 'index';

        switch ($action) {
            case 'create':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $this->model->create($_POST);
                    header('Location: index.php');
                } else {
                    require 'views/asistencias/create.php';
                }
                break;
            case 'edit':
                $id = $_GET['id'] ?? null;
                if (!$id) { echo "ID requerido"; return; }
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $this->model->update($id, $_POST);
                    header('Location: index.php');
                } else {
                    $asistencia = $this->model->getById($id);
                    require 'views/asistencias/edit.php';
                }
                break;
            case 'delete':
                $id = $_GET['id'] ?? null;
                if ($id) $this->model->delete($id);
                header('Location: index.php');
                break;
            default:
                $asistencias = $this->model->getAll();
                require 'views/asistencias/index.php';
                break;
        }
    }
}
