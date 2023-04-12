<?php

$weatherArray = array("Bogotá" => "Cold", "Montería" => "Hot", "Medellin" => "Mild");
$locationArray = array("Guajira" => "North", "Leticia" => "South", "Santander" => "East", "Antioquia" => "West");
$tourismArray = array("Santa Marta" => "Sea", "Villavicencio" => "Plains", "Riohacha" => "Desert", "Quindío" => "Valley");

$condicionPrincipal = readline("Selecciona la opción preferida:\n1. Clima\n2. Ubicación\n3. Turismo\n");

switch($condicionPrincipal){
  case 1:
    $clima = readline("\n¿Cual clima prefiere?\n1. Frío\n2. Calido\n3. Templado\n");
    switch($clima){
      case 1:
        $buscarClima = "Cold";
      break;
      case 2:
        $buscarClima = "Hot";
      break;
      case 3:
        $buscarClima = "Mild";
      break;
    }
    echo ("Basado en sus preferencias de Clima y " .$buscarClima."...");
    searchInArray($buscarClima, $weatherArray);
  break;
  case 2:
    $ubicacion = readline("\n¿Cual ubicación prefiere?\n1. Norte\n2. Sur\n3. Este\n4. Oeste\n");
    switch($ubicacion){
      case 1:
        $buscarUbicacion = "North";
      break;
      case 2:
        $buscarUbicacion = "South";
      break;
      case 3:
        $buscarUbicacion = "East";
      break;
      case 4:
        $buscarUbicacion = "West";
      break;
    }
    echo ("Basado en sus preferencias de Ubicacion y " .$buscarUbicacion."...");
    searchInArray($buscarUbicacion, $locationArray);
  break;
  case 3:
    $turismo = readline("\n¿Qué tipo de turismo prefiere?\n1. Mar\n2. Llano\n3. Desierto\n4. Valle\n");
  switch($turismo){
      case 1:
        $buscarTurismo = "Sea";
      break;
      case 2:
        $buscarTurismo = "Plains";
      break;
      case 3:
        $buscarTurismo = "Desert";
      break;
      case 4:
        $buscarTurismo = "Valley";
      break;
    }
    echo ("Basado en sus preferencias de Turismo y " .$buscarTurismo."...");
    searchInArray($buscarTurismo, $tourismArray);
  break;
}

// Función para buscar en cualquier arreglo
function searchInArray($valor, $arreglo){
  $llaveEncontrada = array_search($valor, $arreglo);
  echo "<br>";   
  echo ("Le recomendamos la ciudad ".$llaveEncontrada." ");
}

?>