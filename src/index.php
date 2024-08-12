<?php
 $variable = "Test: "."Hola Mundo";
 $numero = 20;
 $decimal = 10.9;
 $bool = false;
 $nula = null;
 $dollar = "Numero en dollares $numero"; //string con comillas dobles detecta puede llevar variables

 echo '<h1>'.$variable.$bool.'</h1>';
 echo gettype($bool).'<br />';
 echo $dollar.'<br />';
 
 //arreglos
 $mi_nombre[] = 'mazana';
 $mi_nombre[] = 'pera';
 $mi_nombre[] = 'uva';

 var_dump($mi_nombre)
?>

<?php
    //por que explota despues del arreglo ?
    echo '<hr />';
    //Constantes
    define("SITE_NAME_DEF", "CHH.work");
    const SITE_NAME = "encantate.com";
    echo SITE_NAME.'<br />';
    echo SITE_NAME_DEF.'<br />';
    //cosntantes Predefinidas
    echo PHP_VERSION;
    echo __LINE__;
 ?>

<?php
    //Operadores en php
    echo '<hr />';
    //aritméticos
    $numero1 = 55;
    $numero2 = 33;
    
    echo 'Suma: '.($numero1 + $numero2).'<br/>';
    echo 'Resta: '.($numero1 - $numero2).'<br/>';
    echo 'Multiplicación: '.($numero1 * $numero2).'<br/>';
    echo 'divición: '.($numero1 / $numero2).'<br/>';
    echo 'Resto: '.($numero1 % $numero2).'<br/>';

    //Incremento y Decremento 
    echo '<hr />';
    $year=2019;
    echo $year++.' year++ '.$year.'<br/>';
    echo $year--.' year-- '.$year.'<br/>';
    echo ++$year.' ++year '.$year.'<br/>';
    echo --$year.' --year '.$year.'<br/>';

    //Asignanción
    echo '<hr />';
    $edad = 55;
    echo $edad.'<br/>';
    echo ($edad+=5).' +=5 '.'<br/>';
    echo ($edad-=5).' -=5 '.'<br/>';
    echo ($edad*=5).' *=5 '.'<br/>';
    echo ($edad/=5).' /=5 '.'<br/>';
    echo ($edad%=5).' %=5 '.'<br/>';
?>

<?php
    echo '<hr />';
    //varialbes super globales
    //variables de servidor
    echo $_SERVER['SERVER_ADDR'].'<br />';
    echo $_SERVER['SERVER_NAME'].'<br />';
    echo $_SERVER['SERVER_SOFTWARE'].'<br />';
    echo $_SERVER['HTTP_USER_AGENT'].'<br />';
    echo $_SERVER['REMOTE_ADDR'].'<br />';

?>

<?php
    echo '<hr />';
    //08-Condicionales

    /*
    Operdores de comparación
    == igual
    === identico "Compara hasta que sea el mismo tipo de dato"
    != distinto
    <> diferente
    !== no identico
    < menor que
    > mayor que
    <= menor o igual que
    >= mayor igual que

    OPERADORES LOGICOS

    && AND Y
    || OR O
    ! NOT NO
    and, or
    */
    
    $color = "rojo";
    if ($color == "rojo") {
        echo "El color es rojo";
    }else {
        echo "El color NO es rojo";
    }
    echo '<br />'.'<br />';
    $color = "verde";
    if ($color == "rojo") {
        echo "El color es rojo";
    }else {
        echo "El color NO es rojo";
    }

    //------------------------
    echo '<hr />';
    $year = 2019;

    if($year != 2019) {
        echo "Año diferente al 2019";
    } else {
        echo "Estamos en el 2019";
    }

    //ejemplo 3
    echo '<hr />';
    $nombre = "cristian Huijse";
    $ciudad = "Valdivia";
    $continente = "America del Sur";
    $edad = 36;
    $mayoria_edad = 18;

    if($edad >= $mayoria_edad){
        echo "<h1>$nombre es mayor de edad</h1>";
        echo "<h2>Ciudad: $ciudad</h2>";
            if ( $continente == "America del Sur"){
                echo "Es de America del sur";
            } else {
                echo "No es de america del sur";
            };
    } else {
        echo "<h2>$nombre No es mayor de edad</h2>";
        
    }

    //ejemplo 4 elseif
    echo '<hr />';

    $dia =3;

    if ($dia == 1){
        echo "es lunes";
    } elseif ($dia == 2) {
        echo "es martes";
    } elseif ($dia == 3) {
        echo "es miercoles";
    } elseif ($dia == 4) {
        echo "es jueves";
    } elseif ($dia == 5) {
        echo "es viernes";
    } elseif ($dia == 6) {
        echo "es fin de semana";
    }

    // ejempolo 4 && y ||
    echo '<hr />';
    $edad1 = 18;
    $edad2 = 64;
    $edad_oficial = 18;

    if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
        echo "ESTA EN EDAD DE TRABAJAR";
    } else {
        echo "NO PUEDE TRABJAR";
    }

    echo '<hr />';
    $pais ="Mexico";
    if($pais == "Mexico" || $pais == "España" || $pais == "Chile"){
        echo "En este país se habla español";
    } else {
        echo "En este país no se habla español";
    }

    // ejempolo 5 switch
    echo '<hr />';
    $dia == 4;

    switch($dia){
        case 1:
            echo "LUNES";
            break;
        case 3:
            echo "MARTES";
            break;
        case 3:
            echo "MIERCOLES";
            break;
        case 4:
            echo "JUEVES";
            break;
        case 5:
            echo "VIERNES";
            break;
        default:
            echo "FIN DE SEMANA";
            break;
}

    // ejempolo 5 GOTO
    echo '<hr />';
    goto marca;
    echo "<h3>Instruccion 1</h3>";
    echo "<h3>Instruccion 2</h3>";
    echo "<h3>Instruccion 3</h3>";
    echo "<h3>Instruccion 4</h3>";
    echo "<h3>Instruccion 5</h3>";

    marca:
    echo "<h3>Me he saltado 4 echos</h3>"

    
?>

<?php
    echo '<hr />';
    //BUCLE WHILE
    $numero = 0;
    while($numero <= 50) {
        echo $numero;
        if ($numero != 50){
            echo ", ";
        }
        $numero++;
    }
    echo '<hr />';

    //Ejemplo para hacer una tabla
    if(isset($_GET['numero'])){
        //cambiar tipo de dato
        $numerop = (int)$_GET['numero'];
    }else {
        $numerop = 1;
    }

    echo "<h2>Tabla de multiplicar del numero $numerop</h2>";

    $contador = 0;

    while( $contador <= 10){
        echo "$numerop x $contador = ".($numerop * $contador)."<br/>";
        $contador++;
    }

    echo '<hr />';
    // BUCLE DO WHILE
    // El while() va al final, esto significa que por lo menos se ejecutará una vez

    $edad = 18 ;
    $contador = 1;

    do{
        echo "tienes acceso al local privado $contador <br/>";
        $contador++;
    }while($edad >= 18 && $contador <= 10);

    echo '<hr />';
    // BUCLE for()

    //for(variable contador, condición, incrementa el valor del contador)
        //BLOQUE DE INSTRUCCIÓNES
    
    $resultado = 0;
    $reusltado2 = 5; 
    for($i = 0; $i <= 10; $i++ ){
        $resultado = $resultado + $i;
        echo "$reusltado2 x $i = ".($reusltado2 * $i)."<br/>";
    }
    echo "<h2>El resultado1 es: $resultado</h2>";
    
?>