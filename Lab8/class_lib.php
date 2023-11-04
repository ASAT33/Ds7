<?php
class ManejoArreglos {
    private $numerosPares = array();
    private $limite = 5;

    public function __construct() {
        session_start();

        if (!isset($_SESSION['numeros_pares'])) {
            $_SESSION['numeros_pares'] = array();
        }
    }

    public function agregarNumero($numero) {
        if ($numero % 2 == 0) {
            $_SESSION['numeros_pares'][] = $numero;
        } else {
            return "El número $numero es impar, ingrese un número par.";
        }

        if (count($_SESSION['numeros_pares']) >= $this->limite) {
            session_destroy();
            return "Ha alcanzado el límite de 5 números pares ingresados.";
        }

        return null;
    }

    public function mostrarNumerosPares() {
        return implode(', ', $_SESSION['numeros_pares']);
    }
}

class FactorialCalculator {
    public function calcularFactorial($valor) {
        $factorial = 1;

        if ($valor < 0) {
            return "El valor ingresado no es válido";
        } else {
            for ($i = 1; $i <= $valor; $i++) {
                $factorial = $factorial * $i;
            }
            return "El factorial de $valor es $factorial";
        }
    }
}

class MatrizIdentidadGenerator {
    public function generarMatrizIdentidad($valor) {
        $valor = (int)$valor;
        if ($valor % 2 == 0 && $valor > 0) {
            $matriz = "<h2>Matriz Identidad de valor $valor:</h2>";
            $matriz .= "<table border='1'>";
            for ($i = 0; $i < $valor; $i++) {
                $matriz .= "<tr>";
                for ($j = 0; $j < $valor; $j++) {
                    if ($i == $j) {
                        $matriz .= "<td>1</td>";
                    } else {
                        $matriz .= "<td>0</td>";
                    }
                }
                $matriz .= "</tr>";
            }
            $matriz .= "</table>";
            return $matriz;
        } else {
            return "El orden de N debe ser un número par y mayor que cero.";
        }
    }
}

?>