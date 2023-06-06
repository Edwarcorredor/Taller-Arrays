<?php
    /**
     *TODO Ejercicio 1
    
    $planetas = ["Sol" => 0,
    "Mercurio" => 1,
    "Venus" => 2,
    "Tierra" => 3,
    "Marte" => 4,
    "Jupiter" => 5,
    "Saturno" => 6,
    "Urano" => 7,
    "Neptuno" => 8,
    "Pluton" => 9,];
    $planetas = array_flip($planetas);
    $valor = $_POST['valor'];

    echo <<<HTML
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <div class="container text-center p-3">
        <h1 style="color: white;">El planeta en la posición $valor es: $planetas[$valor]</h1>
        <a href='index.html'><button class="btn btn-info">Volver</button></a>
    </div>
    
    HTML;
    */

    /**
     *TODO Punto 2
     */
    
    $planetas = [];

    $valor = $_POST['valor'];

    for ($i=1; $i <= $valor; $i++) { 
        $planetas[$i-1] = "planeta ".$i;
    };

    $planetas = array_flip($planetas);

    for ($i=1; $i <= $valor; $i++) { 
        $planetas["planeta ".$i] = "Deshabitado";
    };

    $planetas_value = array_values($planetas);
    $planetas_key = array_keys($planetas);
    
    $tabla = '<table class="table table-info table-striped table-hover"><thead><tr><th scope="col">Planeta</th><th scope="col">Estado</th></tr></thead><tbody>';
    
    for ($i=0; $i < $valor; $i++) { 
        $tabla .= "<tr><td>$planetas_key[$i]</td><td>$planetas_value[$i]</td></tr>";
    };

    echo <<<HTML
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <div class="container text-center p-3">
        <h1 style="color: white;">Estado de los planetas es: $tabla</h1>
        <br>
        <a href='index.html'><button class="btn btn-info m-3">Volver</button></a>
    </div>
    
    HTML;


?>    