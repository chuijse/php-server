<?php

function muestraNombres(){
    echo "Cristian Huijse";
    echo "Cristian Huijse";
    echo "Cristian Huijse";
    echo "Cristian Huijse";
    echo "Cristian Huijse";
    echo "<hr/>";
}

muestraNombres();
muestraNombres();
muestraNombres();
muestraNombres();

function tabla($numero){
echo "<h3>Tabla de multiplicar del numero: $numero </h3>";
    for($i = 1 ; $i <= 10 ; $i++){
        $operación = $numero * $i;
        echo "$numero x $i = $operación<br/>";
    }
}

tabla(55);

if(isset($_GET['numero'])){
    tabla(($_GET['numero']));
    //tabla(($_GET['numero'])+1);
} else {
    echo "no hay número";
}

?>

<?php
    //parametr de entrada = algo, significa que es opcional
    function calc($numero1, $numero2, $negrita= false){
        $candena_texto="";
        echo "<hr/>";
        if ($negrita == true) {
            $candena_texto.="<h1>";
        }
        $candena_texto.='Suma= '.($numero1 + $numero2).'<br/>';
        $candena_texto.='resta= '.($numero1 - $numero2).'<br/>';
        $candena_texto.='divición= '.($numero1 / $numero2).'<br/>';
        $candena_texto.='mulrtiplición= '.($numero1 * $numero2).'<br/>';
        if ($negrita == true) {
            $candena_texto.="</h1>";
        }

        return $candena_texto;
    }

    echo calc(10, 30); // echo pude imprimir un array proviniente de otra función
    echo calc(10, 30, true);  


    //Funcion con funciones dentro de otra
    echo "<hr />";

    $nombre_global = "Cristian"; //variable Global

    function getNombre($nombre){
        $texto = "El nombre es $nombre"; //variables local
        return $texto;
    }

    function getApellido($apellido){
        $texto = "Los apellidos son $apellido";
        return $texto;
    }

    function devolverNombre($nombre, $apellidos){
        $texto = getNombre($nombre)
                ."<br>".
               getApellido($apellidos);
            return $texto;
    }

    echo devolverNombre($nombre_global, "Huijse Heise");

    //funciones variables
    echo "<hr />";

    function buenasDias(){
        return "Hola Buenos días :)";
    }

    function buenasNoches(){
        return "<h2>Buenas noches :)</h2>";
    }

    function buenasTardes(){
        return "Hola, hora de almorzar :)";
    }

    $horario = "Dias";

    $miFuncion = "buenas".$horario;

    echo $miFuncion();


?>

<?php
    echo "<hr />";
    echo "<h1> Funciónes predefinidas </h1>";

    //Debugear
    echo "<hr />";
    echo "<h3>Debugear</h3>";
    $nombre = "Cristian Huijse";
    var_dump($nombre);

    //Data
    echo "<hr />";
    echo "<h3>Data</h3>";
    echo "date()= ".date('d-m-Y')."<br/>";
    echo "time()= ".time()."<br/>";
    echo "Raiz Cuadrada de 10= ".sqrt(20)."<br/>";
    echo "Número aleatorio= ".rand(10, 40)."<br/>";
    echo "Número pi= ".pi()."<br/>";
    echo "Redondear Número= ".round(7.897625, 2)."<br/>";

    echo "<hr />";
    echo "<h1>Funciónes integrales del sistema</h1>";
    //detectar tipos de variables
    echo "gettype()= ".gettype("texto")."<br/>";
    // Comprobar si una variable existe
    if (is_string("texto")){
        echo "is_string= "."es un string"."<br/>";
    }
    if(isset($edad)){
        echo "isset() "."no existe la variable"."<br/>";
    } else {
        echo "isset() "."si existe la variable"."<br/>";
    }
    // limpiar variables
    echo "trim( Hola munedo    )= ".trim(" Hola munedo    ")."<br/>";
    // Eliminar variables / indices de código
    $year = 2023;
    unset($year);
    //comprobar variables vacias
    $texto = FALSE;
    if(empty($texto)){
        echo "empty()= "."Variable $texto"."<br/>";
    } else {
        echo "empty()= "."Variable vacia"."<br/>";
    }
    //Contar Caracteres de un string
    $candena = 1234;
    echo "variable cadena= ".$candena."<br/>";
    echo "strlen(cadena)= ".strlen($candena)."<br/>";
    echo "strpos(cadena,2)= ".strpos($candena, 2)."<br/>";
    $frase = str_replace(2, "vida", $candena);
    echo "str_replace(vida, 2, cadena)= ".$frase."<br/>";

    // MAYSUCULAS y minuscales
    echo "strtolower(HOLA)= ".strtolower("HOLA")."<br/>";
    echo "strtoupper(hola)= ".strtoupper("hola")."<br/>";

?>