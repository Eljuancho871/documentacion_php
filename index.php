<?php 

/**
 * ! Sintaxis basica de php
 */

    echo "<h4>sintaxis de php basica</h4>"; 

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
    echo "<br/>";
    print_r($apellido);
    echo "<br/>";
    printf("Hola %s", $apellido);
    echo "<br/>";


    /**
     ** Tipo de Dato saber
     */


    var_dump($apellido);
    echo "<br/>";
    var_dump(EDAD <=> ALTURA);
    echo "<br/>";

/**
 * ! Documentacion Arrays
 */

 echo "<h4>metodos de arrays mas usados segun miguel :)</h4>";

$array_asociado = ["uno" => 1, "dos" => 2, "tres" => 3, "cuatro" => 4, "cinco" => 5];
$array = [1, 2, 3, 4, 5];
$arra_vacido = Array();

/**
 * *array_flip(): Intercambia las claves con sus valores correspondientes en un array.
 * ? como se ve en el print cambios sus llaver por sus valores
*/
echo "<b>array_flip: </b>";
print_r(array_flip($array_asociado));


/**
 * *array_fill(): Rellena un array con un valor especificado.
 * ? Recibe tres parametros, desde que indice va ha comenzar, cuanto va ser la longitud del array y con que dato se va llenar el array
*/

echo "<br/>";
echo "<b>array_fill: </b>";
print_r(array_fill(0, 5, "vacido"));


/**
 * *array_filter(): Filtra los elementos de un array utilizando una función de devolución de llamada.
 * ? Si solo se especifica el primer parametro del array solo va eliminar los datos relacionado a false (0, false, null, etc...), segundo parametro es un collback y por ultimo recibe un tercer parametro que tienes tres opciones, se haga el filtrado por la llave, valor o ambos
*/

echo "<br/>";
echo "<b>array_filter: </b>";
print_r(array_filter($array_asociado, function ($value, $key){

    return $value > 2;

}, ARRAY_FILTER_USE_BOTH));


/**
 * *array_map(): Aplica una función a cada elemento de un array y devuelve un nuevo array con los resultados.
 * ?  primer parametro es la funcion o callback que se va ejecutar por cada elemento del array, segundo parametro recibe el array
*/

echo "<br/>";

function cuadrado($numero)
{
    return ($numero * $numero);
}

$nuevo_resultado_map = array_map("cuadrado", $array);
echo "<b>array_map: </b>";
print_r($nuevo_resultado_map);



/**
 * *array_reduce(): Reduce un array a un solo valor aplicando una función de devolución de llamada.
 * ? Recibe el primer parametro el array y de segundo la funcion al aplicar
*/

echo "<br/>";

$array_reduce = array(1, 2, 3, 4, 5);
function suma_reduce($acc, $el){

    $acc += $acc + $el;
    return $acc;
}

$resultado = array_reduce($array_reduce, "suma_reduce");
echo "<b>array_reduce: </b>";
var_dump($resultado);


/**
 * *array_key_exists(): Comprueba si una clave existe en un array.
 * ?recibe como primer parametro lo que se va buscar si existe y de segundo el array
*/

echo "<br/>";
echo "<b>array_key_exists: </b>";
print_r(array_key_exists("xd", $array_asociado) ? "si existe valor" : "no existe valor");
echo "<br/>";
echo "<b>array_key_exists: </b>";
print_r(array_key_exists("uno", $array_asociado) ? "si existe valor" : "no existe valor" );


/**
 * *in_array(): Comprueba si un valor existe en un array.
 * ?recibe como primer parametro lo que se va buscar si existe y de segundo el array
*/



echo "<br/>";
echo "<b>in_array: </b>";
print_r(in_array(100, $array_asociado) ? "si existe valor" : "no existe valor");
echo "<br/>";
echo "<b>in_array: </b>";
print_r(in_array(1, $array_asociado) ? "si existe valor" : "no existe valor" );


/**
 * *array_rand(): Devuelve una o varias claves aleatorias de un array.
 * ?recibe el array, y de segundo deade que indice va empezar la aletoriedad
*/

echo "<br/>";
echo "<b>array_rand: </b>";
print_r(array_rand($array));


/**
 * *array_unique(): Elimina los valores duplicados de un array.
 * ? recibe el array como primer parametro
*/

echo "<br/>";
$array_valores_repetidos = [1, 1, 1, 2, 3, 4, 5, 5, 6];
echo "<b>array_unique: </b>";
print_r(array_unique($array_valores_repetidos));


/**
 * *array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.
 * ?como parametro recibe todos los arrays que quieras identificar sus valores comunes
*/

echo "<br/>";
$array1 = [1, 2, 3, 4, 5, 6, 7];
$array2 = [1, 20, 2, 30, 3, 40, 5, 60];

echo "<b>array_intersect: </b>";
print_r(array_intersect($array1, $array2));


/**
 * *array_push(): Agrega uno o más elementos al final de un array.
 * ? Primer parametro recibe el array y de segundo el numero ha agregar
*/

echo "<br/>";
$array_nuevo = [1, 2, 3, 4];
array_push($array_nuevo, 5);
echo "<b>array_push: </b>";
print_r($array_nuevo);


/**
 * *array_pop(): Extrae y elimina el último elemento de un array.
 * ? recibe el array
*/

echo "<br/>";
$array_nuevo = [1, 2, 3, 4];
array_pop($array_nuevo);
echo "<b>array_pop: </b>";
print_r($array_nuevo);


/**
 * *array_reverse(): Revierte el orden de los elementos en un array.
 * ?recibe el array
*/

echo "<br/>";
$array_nuevo2 = [1, 2, 3, 4];
$revez = array_reverse($array_nuevo2);
echo "<b>array_reverse: </b>";
print_r($revez);



/**
 * *array_sum(): Devuelve la suma de todos los valores de un array numérico.
 * ?recibe un array
*/

echo "<br/>";

$array_nuevo2 = [1, 2, 3, 4];
echo "<b>array_sum: </b>";
print_r(array_sum($array_nuevo2));




/**
 * *array_product(): Devuelve el producto de todos los valores de un array numérico.
 * ?recibe un array
*/

echo "<br/>";

echo "<b>array_product: </b>";
    print_r(array_product($array_nuevo2));


/**
 * *array_chunk(): Divide un array en fragmentos más pequeños.
 * ?recibe el array y desde que datos va ser partidos, por ejmplo 2 -> cada dos valores va contener un array
*/

echo "<br/>";
$array = [1, 2, 3, 4];
echo "<b>array_chunk: </b>";
print_r(array_chunk($array, 2));


/**
 * *array_keys(): Devuelve todas las claves de un array.
 * ?recibe el array
*/

echo "<br/>";
echo "<b>array_keys: </b>";
print_r(array_keys($array_asociado));




/**
 * *array_values(): Devuelve todos los valores de un array.
 * ?recibe el array
*/

echo "<br/>";
echo "<b>array_values: </b>";
print_r(array_values($array_asociado));

/**
 * ! Metodos verificar datos existenetes
 */

 echo "<h4>Metodos verificar datos existenetes</h4>"; 

 /**
 * * isset
 * ? comprueba si una variable o un elemento de un array está definido y no es null.
*/


$valor1 = false;
$valor2 = null;

print_r(isset($valor1));
print_r(isset($valor2));

echo "<br/>";

 /**
 * * empty
 * ?  valor 3 no esta vacido por lo tanto lanzara false y valor 4 esta indefinido o se toma como valor negativo y si lo tomara
*/

$valor3 = "edee";
$valor4 = null;

print_r(empty($valor3));
print_r(empty($valor4));


echo "<br/>";

 /**
 * * empty
 * ?  valor 3 no esta vacido por lo tanto lanzara false y valor 4 esta indefinido o se toma como valor negativo y si lo tomara
*/


/**
 * ! Ordenamiento
 */

 echo "<h4>Ordenamiento</h4>"; 


  /**
 * * sort
 * ? ordena de menor ha mayor  
*/

$numeros = [1, 4, 6, 2, 7, 3];
sort($numeros);
var_dump($numeros);

  /**
 * * rsort
 * ?  ordena de mayor a menor
*/

echo "<br/>";

$numeros = [1, 4, 6, 2, 7, 3];
rsort($numeros);
var_dump($numeros);

echo "<br/>";

/**
 * * asort
 * ?  ordena en orden alfabetico por los valores
*/

$persona = ["nombre" => "juan", "edad", 17, "sexo" => "M"];

asort($persona);
var_dump($persona);

/**
 * * arsort
 * ?  ordena por valores primero por Z
*/

echo "<br/>";

$persona = ["nombre" => "juan", "edad", 17, "sexo" => "M"];

arsort($persona);
var_dump($persona);

/**
 * * ksort
 * ?  ordena en orden alfabetico por las llaves
*/

echo "<br/>";

$persona = ["nombre" => "juan", "edad", 17, "sexo" => "M"];

ksort($persona);
var_dump($persona);

/**
 * * krsort
 * ? ordena en orden primero por la Z por las llaves
 * ?  
*/

echo "<br/>";

$persona = ["nombre" => "juan", "edad", 17, "sexo" => "M"];

krsort($persona);
var_dump($persona);