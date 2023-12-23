<?php
require_once "Conexion.php";
class Pregunta
{
    static function listar($tabla, $columna, $valor)
    {
        if ($columna ==  null){
            $stmt = Conexion::conectar()->prepare("select * from $tabla");
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            $stmt = Conexion::conectar()->prepare("select * from $tabla where $columna = :$columna");
            $stmt->bindParam(":", $columna, $valor, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
        }
    }
}
