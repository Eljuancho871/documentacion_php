<?php 

    /**
     **Especifica que lee y accepte los archivos json
     */

    // header("Content-Type: aplicattion/json");

    /**
     ** Definir constantes, 2 maneras
     */

    const EDAD = 17;
    const ALTURA = 19;
    define("NOMBRE", "juan");


    /**
     ** Tipado estricto, buenas practicas
     */

    $apellido = (string) "ramirez";
    function suma(int $num1, int $num2): int {

        return $num1 + $num2;
    }

    suma(1, 2);

    /**
     ** Para imprimir, algunos metodos, existen mucho mas, echo solo texto, print_r legible para humanos, printf para dar formato
     */

    echo $apellido;
    print_r($apellido);
    printf("Hola %s", $apellido);


    /**
     ** Tipo de Dato saber
     */


    var_dump($apellido);
    echo "<br/>";
    var_dump(EDAD <=> ALTURA);
?>