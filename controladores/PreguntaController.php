<?php
class PreguntaController
{
    static public function listarPreguntas($tabla, $columna, $valor){
        $respuesta = Pregunta::listar($tabla, $columna, $valor);
        return $respuesta;
    }
}