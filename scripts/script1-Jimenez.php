<?php
/**
* Contiene tres funciones: multiplica, divide y saluda
* @author Laura Jimenez Jimenez
* @version 1.0.2
*/

/**
* Devuelve la suma de los argumentos enviados en la llamada
* @param integer $num1 primer número a sumar
* @param integer $num2 segundo número a sumar
* @return integer resultado de la suma de dos números enteros
* @deprecated esta función está obsoleta desde el 27/05/2023
*/
function suma ($num1, $num2)
{
return $num1 + $num2;
}

/**
* Devuelve el producto de los argumentos enviados en la llamada
* @param integer $num1 primer número a multiplicar
* @param integer $num2 segundo número a multiplicar
* @return integer resultado del producto de dos números enteros
* @example 25 * 5 = 125
*/
function multiplica ($num1, $num2)
{
return $num1 * $num2;
}
/**
* Devuelve el resultado de la división de los argumentos enviados en la llamada
* @param integer $num1 primer número a dividir (dividendo)
* @param integer $num2 segundo número a dividir (divisor)
* @return integer resultado de la división de dos números enteros
* @example 25 / 5 = 5
* @todo devolver también el resto de la división
*/
function divide($num1, $num2,)
{
 return $num1 / $num2;
}
/**
* Devuelve un saludo con el nombre que le enviamos en la llamada
* @param string $nombre Es el nombre de la persona a la que saludamos
* @return string Saludo a la persona solcitada
*/
function saluda($nombre)
{
 echo "Hola ".$nombre;
}
echo "Ejemplo de funciones en PHP</br>";
saluda("Laura");
echo "<br/> El resultado de la división entre 25 y 5 es : ".divide(25,5);
echo "<br/> El producto de 25 por 5 es : ".multiplica(25,5);
echo "<br/> Hasta pronto!!<br/>";
?>
