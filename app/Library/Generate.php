<?php

/**
 * Clase para la generación de números aleatorios de manera
 * personalizada por medio de argumentos.
 *
 * @package    IntelGUA
 * @subpackage Library
 * @author     Henry Díaz <hnrdiaz@gmail.com>
 */

namespace IntelGUA\Library;

class Generate
{

    protected $currentNumber = "";

    protected $listNumbers = [];
    /**
     * Permite obtener una determinada cantidad de números aleatorios
     * indicada en el argumento $quantity, ya sea que los números sean
     * únicos o se puedan repetir indicándolo en el argumento $unique.
     *
     * El resultado devuelto por el método es un array conteniendo la
     * cantidad de números generados.
     *
     * @param int $quantity
     * @param boolean $unique
     * @return array
     */
    public function getNumbersGenerated($quantity = 1000, $unique = true, $length = 5)
    {
        $this->listNumbers[] = $this->generateNumber($length);

        while (count($this->listNumbers) <= ($quantity - 1)) {
            $this->currentNumber = $this->generateNumber($length);
            if (in_array((string)$this->currentNumber, $this->listNumbers)) {
                continue;
            } else {
                $this->listNumbers[] = $this->currentNumber;
            }

        }
        return $this->listNumbers;

    }

    /**
     * Genera un numero de manera aleatoria.
     *
     * El número generado es formado por la cantidad
     * de dígitos que se indica en el parámetro $length.
     *
     * @param int $length
     * @return string
     */
    public function generateNumber($length = 5)
    {

        $chars = '1234567890';
        /** Caracteres permitidos para formar la cantidad */
        $chars_length = (strlen($chars) - 1);
        /** Designamos el largo de la cadena */
        $string = $chars {
            rand(0, $chars_length)};

        for ($i = 1; $i < $length; $i = strlen($string)) {
            $r = $chars {
                rand(0, $chars_length)};
            if ($r != $string {
                $i - 1}) $string .= $r;
        }

        return $string;
        /** Devolvemos la cantidad formada como cadena */
    }

}
