<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../entities/Propietario.entidad.php';

/**
 * Esta clase contiene la lógica para interactuar con la tabla "propietarios".
 */
class Propietario
{
    private $pdo = null;

    public function __construct()
    {
        $this->pdo = Database::getConexion();
    }

    public function getAll(): array
    {
        $sql = "
            SELECT
                idpropietario,
                apellidos,
                nombres
            FROM propietarios
            ORDER BY apellidos, nombres
        ";

        $query = $this->pdo->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
