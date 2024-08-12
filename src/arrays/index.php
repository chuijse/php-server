<?php
//arrays
$peliculas = array('Batman', 'Spiderman', 'Señor De los Anillos');
$cantantes=['2pac', 'Drake', 'jenifer Lopez'];

//array asociativo
$personas = array(
    'nombre' => 'Cristian',
    'apellidos' => 'huijse Heise',
    'web' => 'chh.work',
);

echo $peliculas[0];
echo "<br/>";
echo $cantantes[2];

echo "<hr/>";
echo "<h2>Recorre el array de peliculas</h2>";
for($i = 0; $i < count($peliculas); $i++){
    echo "<li>".$peliculas[$i]."</li>";
}

echo "<hr/>";
echo "<h2>Recorre el array de cantantes</h2>";
//recorrer con foreach
foreach($cantantes as $cantante) {
    echo "<li>".$cantante."</li>";
}

//array multidimensionales
$contactos = array(
    array(
    'nombre' => 'Cristian',
    'apellidos' => 'Huijse Heise',
    'web' => 'chh.work',
    ),
    array(
        'nombre' => 'Victoria',
        'apellidos' => 'Maureira Saez',
        'web' => 'vms.work',
    ),
    array(
        'nombre' => 'Rodolfo',
        'apellidos' => 'Huijse Malagamba',
        'web' => 'rhm.work',
    ),
);

echo "<hr/>";
foreach($contactos as $key => $c) {
    echo "<ul>";
    echo "<li>".$c['nombre']."</li>";
    echo "<li>".$c['apellidos']."</li>";
    echo "<li>".$c['web']."</li>";
    echo "</ul>";
}

$cantantes=['2pac', 'Drake', 'jenifer Lopez', 'Halo'];
asort($cantantes);

//Añadir elemento a un array
$cantantes[] = "pavaroti";
array_push($cantantes, "Bocheli");
//Borra el último elemento
array_pop($cantantes);
//Borrar n elemento definido segun su key
unset($cantantes[2]);
//Borrar un elemento aleatoriamente
$indice = array_rand($cantantes);
echo $cantantes[$indice]."<br/>";
//var_dump($cantantes)

//Reverse arrya
//var_dump(array_reverse($cantantes));
//buscar dentro de un array
var_dump(array_search('2pac', $cantantes));
//contar el numero de elementos
echo sizeof($cantantes)."<br/>"


?>

