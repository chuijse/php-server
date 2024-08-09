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
    echo '<br />'.'<br />';
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
    echo '<br />'.'<br />';
    //aritméticos
    $numero1 = 55;
    $numero2 = 33;
    
    echo 'Suma: '.($numero1 + $numero2).'<br/>';
    echo 'Resta: '.($numero1 - $numero2).'<br/>';
    echo 'Multiplicación: '.($numero1 * $numero2).'<br/>';
    echo 'divición: '.($numero1 / $numero2).'<br/>';
    echo 'Resto: '.($numero1 % $numero2).'<br/>';

    //Incremento y Decremento 
    echo '<br />'.'<br />';
    $year=2019;
    echo $year++.' year++ '.$year.'<br/>';
    echo $year--.' year-- '.$year.'<br/>';
    echo ++$year.' ++year '.$year.'<br/>';
    echo --$year.' --year '.$year.'<br/>';

    //Asignanción
    echo '<br />'.'<br />';
    $edad = 55;
    echo $edad.'<br/>';
    echo ($edad+=5).' +=5 '.'<br/>';
    echo ($edad-=5).' -=5 '.'<br/>';
    echo ($edad*=5).' *=5 '.'<br/>';
    echo ($edad/=5).' /=5 '.'<br/>';
    echo ($edad%=5).' %=5 '.'<br/>';
?>