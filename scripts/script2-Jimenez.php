<?php 
    /**
    * Clase que implementa una calculadora con tres métodos: saludar(estático), multiplica y divide
    * @see saludar()
    * @see multiplica()
    * @see divide()
    * @author Laura Jimenez Jimenez
    * @version 1.0.1
    */
    class Calculadora
    {
        /**
         * Método constructor de la clase Calculadora
         * No recibe parámetros y no devuelve nada
         */
        function Calculadora()
        {
            // Nada
        }

        /**
        * Método estático que devuelve un saludo con el nombre que le enviamos en la llamada
        * @param string $nombre Es el nombre de la persona a la que saludamos
        * @return string Saludo a la persona solcitada
        * @static
        */
        public static function saludar($nombre)
        {
         echo "Hola ".$nombre.".<br>";
        }

        /**
         * Devuelve el producto de los argumentos enviados en la llamada
         * @param integer $num1 primer número a multiplicar
         * @param integer $num2 segundo número a multiplicar
         * @return integer resultado del producto de dos números enteros
         * @example 25 * 5 = 125
         */
        function Multiplica($num1, $num2)
        {
            return $num1 * $num2;
        }

        /**
        * Devuelve el resultado de la división de los argumentos enviados en la llamada
        * @param integer $num1 primer número a dividir (dividendo)
        * @param integer $num2 segundo número a dividir (divisor)
        * @return double resultado de la división de dos números enteros
        * @example 25 / 5 = 5
        * @todo devolver también el resto de la división
        */
        function Divide($num1, $num2)
        {
            return $num1 / $num2;
        }
    }

    // Inicializamos la clase
    $calc = new Calculadora();

    Calculadora::saludar('Laura');
    $resultadoMultiplica = $calc->Multiplica(25,5);
    $resultadoDivide = $calc->Divide(25,5);

    echo 'El producto es: '.$resultadoMultiplica.'; La división es: '.$resultadoDivide.'.';
?>
