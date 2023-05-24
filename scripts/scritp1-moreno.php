<?php

/**
 * Script 1 - Funciones matemáticas básicas
 *
 * Este script contiene funciones para realizar operaciones matemáticas básicas, como la suma, resta, multiplicación y división.
 * Autor: Moreno
 * Versión: 1.0
 */

/**
 * Suma dos números.
 *
 * @param int $num1 El primer número.
 * @param int $num2 El segundo número.
 * @return int La suma de los dos números.
 *
 * @since 1.0
 */
function sumar($num1, $num2) {
  return $num1 + $num2;
}

/**
 * Resta dos números.
 *
 * @param int $num1 El primer número.
 * @param int $num2 El segundo número.
 * @return int La resta de los dos números.
 *
 * @since 1.0
 */
function restar($num1, $num2) {
  return $num1 - $num2;
}

/**
 * Multiplica dos números.
 *
 * @param int $num1 El primer número.
 * @param int $num2 El segundo número.
 * @return int La multiplicación de los dos números.
 *
 * @since 1.0
 */
function multiplicar($num1, $num2) {
  return $num1 * $num2;
}

/**
 * Divide dos números.
 *
 * @param int $num1 El numerador.
 * @param int $num2 El denominador.
 * @return mixed El resultado de la división o un mensaje de error si se intenta dividir entre cero.
 *
 * @since 1.0
 */
function dividir($num1, $num2) {
  if ($num2 == 0) {
    return "Error: No se puede dividir entre cero.";
  } else {
    return $num1 / $num2;
  }
}

// Etiquetas personalizadas
// Etiqueta 1: @customtag1 Esta es una etiqueta personalizada número 1.
// Etiqueta 2: @customtag2 Esta es una etiqueta personalizada número 2.

?>