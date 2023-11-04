<?php
require_once('modelo.php');

class conteo extends modeloCredencialesBD {
    protected $titulo;
    protected $texto;
    protected $categoria;
    protected $fecha;
    protected $imagen;

    public function __construct() {
        parent::__construct();
    }


    public function paginarResultados($pagina, $elementos_por_pagina) {
        $instruccion = "CALL sp_paginar($pagina, $elementos_por_pagina)";
        $consulta = $this->_db->query($instruccion);
        
        if ($consulta) {
            $data = $consulta->fetch_all(MYSQLI_ASSOC);
            $consulta->close();
            $this->_db->close();
            return $data;
        } else {
            // Manejo de error si la consulta falla
            return null;
        }
    }
    

    
}


?>