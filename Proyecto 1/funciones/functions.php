<?php
require_once('modelo.php');

class funciones extends modeloCredencialesBD{
    public function __construct() {
        parent::__construct();
    }

    public function obtener_tareas() {
        $query = "CALL sp_todos";
        $consulta = $this->_db->query($query);
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);
        if ($resultado) {
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }
    public function agregar_tarea($titulo, $descripcion, $fecha_compromiso,$editada,$responsable, $tipo_tarea, $estado) {
        $query ="CALL sp_agregar_tarea('$titulo', '$descripcion', '$fecha_compromiso', '$editada', '$responsable', '$tipo_tarea', '$estado')";
        $consulta = $this->_db->query($query);
    
        if ($consulta) {
            return true; 
        } else {
            return false; 
        }
    }
    
    
   /* public function actualizar_estado($id, $estado) {
        global $conn;
        // Escapamos el estado para prevenir inyección de SQL
        $estado = $conn->real_escape_string($estado);
    
        $query = "UPDATE tareas SET estado='$estado' WHERE id=$id";
        return $conn->query($query);
    }
    */
    
     public function eliminar_tarea($id) {
        $query = "CALL sp_eliminar_tarea('$id')";
        $consulta = $this->_db->query($query);
    
        if ($consulta) {
            return true; 
        } else {
            return false; 
        }
    }
}



    


