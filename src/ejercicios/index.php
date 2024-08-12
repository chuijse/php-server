
<?php
 $pais = "Chile";
 $continente ='Sur America';

 echo "$pais, $continente <br/>";
 echo gettype($pais).'<br/>';
 echo gettype($continente).'<br/>';
 ?>

 <?php
    echo "<hr/>";
    for ($i = 0; $i <= 100; $i++){
        if($i % 2 == 0){
            echo "$i, ";
        }
    }
 ?>

 <?php
     echo "<hr/>";
    $contador = 0;
    while($contador <= 40){
        echo $contador*$contador."<br />";
        $contador++;
    }
 ?>

<?php
     echo "<hr/>";
    if(isset($_GET['numero1']) && isset($_GET['numero2'])){
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
    
        echo 'Suma= '.($numero1 + $numero2).'<br/>';
        echo 'resta= '.($numero1 - $numero2).'<br/>';
        echo 'divición= '.($numero1 / $numero2).'<br/>';
        echo 'mulrtiplición= '.($numero1 * $numero2).'<br/>';
    } else {
        echo "<h1> Introduce correctamente los valores por la URL</h1>";
    }
?>

<?php
     echo "<hr/>";
     if(isset($_GET['numero1']) && isset($_GET['numero2'])){
        $params_numero1 = $_GET['numero1'];
        $params_numero2 = $_GET['numero2'];

        if($params_numero1 < $params_numero2 ) {
            while($params_numero1 < $params_numero2 - 1){
                $params_numero1++;
                echo "$params_numero1, ";
            }
        } else {
            echo "<h2> numero1 debe ser menor a numero2 </h2>";
        }
    } else {
        echo "<h1> Introduce correctamente los valores por la URL</h1>";
    }
?>

<?php
    echo "<hr/>";
    echo "<h2>Tabla de Multiplicar</h2>";

    echo "<table border='1'>";
        echo "<tr>";
        for ($cabecera = 1; $cabecera <= 10; $cabecera++ ) {
            echo "<td>Tabla del $cabecera</td>" ;
        }
        echo "</tr>";
        for ($fila = 1; $fila <= 10; $fila++ ) {
            echo "<tr>";
                for ($i = 1; $i <= 10; $i++ ) {
                    echo "<td>"."$fila x $i= ".($i * $fila)."</td>" ;
                }
            echo "</tr>";
        }
    echo "</table>";
?>

<?php
     echo "<hr/>";
     if(isset($_GET['numero1']) && isset($_GET['numero2'])){
        $params_numero1 = $_GET['numero1'];
        $params_numero2 = $_GET['numero2'];

        if($params_numero1 < $params_numero2 ) {
            while($params_numero1 < $params_numero2 - 1){
                $params_numero1++;
                if($params_numero1 % 2 != 0){
                    echo ($params_numero1).", ";
                }
            }
        } else {
            echo "<h2> numero1 debe ser menor a numero2 </h2>";
        }
    } else {
        echo "<h1> Introduce correctamente los valores por la URL</h1>";
    }
?>