<?php
require_once('modelo.php');

class votos extends modeloCredencialesBD {
    
    public function __construct() {
        parent::__construct();
    }

    public function listar_votos() {
        $instrucction = "CALL sp_listar_votos()";
        $consulta = $this->_db->query($instrucction);
        $resultado =$consulta->fetch_all(MYSQLI_ASSOC);

        if ($resultado) {
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }

    public function actualizar_votos($voto1, $voto2) {
        $instrucction = "CALL sp_actualizar_votos('" . $voto1 . "','" . $voto2 . "')";
        $actualiza = $this->_db->query($instrucction);

        if ($actualiza) {
            return $actualiza;
            $actualiza->close();
            $this->_db->close();
        }
    }
}

?>
