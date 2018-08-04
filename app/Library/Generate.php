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

    private $currentNumber = "";

    private $listNumbers = [];

    private $length = 0;

    private $quantity = 0;

    private $isUnique = false;

    public function __construct($_length = 2, $_quantity = 100, $_isUnique = true)
    {
        $this->length = $_length;
        $this->quantity = $_quantity;
        $this->isUnique = $_isUnique;
    }

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
    public function getNumbersGenerated()
    {
        switch ($length) {
            case (($this->length >= 1) && ($this->length <= 1)):
                throw new Exception("Solo se pueden generar 10 números con una longitud de $this->length dígito.");
                break;
            case (($this->length >= 2) && ($this->length <= 2)):
                throw new Exception("Solo se pueden generar 100 números con una longitud de $this->length dígitos.");
                break;
            case (($this->length >= 3) && ($this->length <= 3)):
                throw new Exception("Solo se pueden generar 1000 números con una longitud de $this->length dígitos.");
                break;
            case (($this->length >= 4) && ($this->length <= 4)):
                throw new Exception("Solo se pueden generar 10000 números con una longitud de $this->length dígitos.");
                break;
            case (($this->length >= 5) && ($this->length <= 5)):
                throw new Exception("Solo se pueden generar 100000 números con una longitud de $this->length dígitos.");
                break;
            case (($this->length >= 6) && ($this->length <= 6)):
                throw new Exception("Solo se pueden generar 1000000 números con una longitud de $this->length dígitos.");
                break;
            case (($this->length >= 7) && ($this->length <= 7)):
                throw new Exception("Solo se pueden generar 10000000 números con una longitud de $this->length dígitos.");
                break;
            default:
                throw new Exception("La longitud de '$this->length' caracteres no esta permitida.");
                break;
        }

        return $this->listNumbers;
    }

    public function generateNumbers()
    {

        while (count($this->listNumbers) <= ($this->quantity - 1)) {
            $this->currentNumber = $this->generateNumber($this->length);
            if ($this->unique == true) {
                if (in_array((string)$this->currentNumber, $this->listNumbers)) {
                    continue;
                } else {
                    $this->listNumbers[] = $this->currentNumber;
                }
            } else {
                $this->listNumbers[] = $this->currentNumber;
            }
        }

        dd($this->listNumbers);
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
    public function generateNumber($length)
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
