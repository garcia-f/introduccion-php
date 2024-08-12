<?php 
    echo "Introduccion a PHP"," <br>";
    echo "<br>";

    echo "Variables";
    echo"<br>";
    $nombre="Fabian";
    var_dump($nombre);
    echo "<br>"; 
    print_r($nombre);
    echo "<br>";
    echo "<br>";

    echo "Sacar un numero random";
    echo"<br>";
    $numero= rand(0,10);
    var_dump($numero);
    echo "<br>";
    echo "<br>";


    // condicional
    echo "Condicional";
    echo"<br>";
    if($numero < 5){
        echo" {$numero} es menor a 5";
    }else{
        echo"{$numero} es mayor a 5";
    }
    echo "<br>";
    echo "<br>";

    // tenario
    echo "Ternario";
    echo"<br>";
    $numero= ($numero < 5) ? "{$numero} es menor a 7" : "{$numero} es mayor a 7";
    print_r($numero);

    echo "<br>";
    echo "<br>";

    // switch
    echo "Switch";
    echo "<br>";    
    $numero=1;
    switch($numero){
        case 1:
            echo"{$numero} es impar";
            break;
    }

    echo "<br>";
    echo "<br>";

    //Table de multiplicar del 5
    echo "Tabla de multiplizar del 5";
    echo "<br>";
    for($i=0; $i <=10; $i++){
        $num=$i*5;
        echo "5 * {$i} = {$num}";
        echo "<br>";
    }
?>