<?php

/**
 * Script 2 - Clase Calculadora
 *
 * Este script contiene una clase Calculadora que proporciona métodos estáticos para realizar operaciones matemáticas básicas.
 * Autor: Moreno
 * Versión: 1.0
 */
class Calculadora {
  
  /**
   * Suma dos números.
   *
   * @param int $num1 El primer número.
   * @param int $num2 El segundo número.
   * @return int La suma de los dos números.
   *
   * @since 1.0
   */
  public static function sumar($num1, $num2) {
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
  public static function restar($num1, $num2) {
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
  public static function multiplicar($num1, $num2) {
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
  public static function dividir($num1, $num2) {
    if ($num2 == 0) {
      return "Error: No se puede dividir entre cero.";
    } else {
      return $num1 / $num2;
    }
  }
  
}

// Etiquetas personalizadas
// Etiqueta 1: @customtag3 Esta es una etiqueta personalizada número 3.
// Etiqueta 2: @customtag4 Esta es una etiqueta personalizada número 4.

?>
