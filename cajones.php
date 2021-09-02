<?php

    //CREAR CAJONERAS EN PHP:

    //ARREGLOS INDEXADOS de una dimension unidimensional (VECTOR)
    $nombresProductos=["arroz","aceite","huevos","jabon","papel higienico","lentejas","arepas","panela","pechuga","sal"];
    print_r( $nombresProductos);
    echo("<br>");
    echo($nombresProductos[0]);

    
    //ARREGLO ASOCIATIVO de una dimension unidimensional (VECTOR)
    $nombresProductos2=["producto1"=>"arroz","producto2"=>"aceite","producto3"=>"huevos","producto4"=>"jabon","producto5"=>"papel higienico","producto6"=>"lentejas","producto7"=>"arepas","producto8"=>"panela","producto9"=>"pechuga","producto10"=>"sal"];
    echo("<br>");
    echo("<br>");
    print_r($nombresProductos2);
    echo("<br>");
    echo($nombresProductos2["producto1"]);

    $cantidadPrductos=["producto1"=>5,"producto2"=>1,"producto3"=>1,"producto4"=>2,"producto5"=>1,"producto6"=>2,"producto7"=>2,"producto8"=>1,"producto9"=>1,"producto10"=>1];
    echo("<br>");
    echo("<br>");
    print_r($cantidadPrductos);

    $PrecioPrductos=["producto1"=>1400,"producto2"=>7000,"producto3"=>10000,"producto4"=>2400,"producto5"=>7000,"producto6"=>1500,"producto7"=>1700,"producto8"=>3200,"producto9"=>11000,"producto10"=>600];
    echo("<br>");
    echo("<br>");
    print_r($PrecioPrductos);




?>