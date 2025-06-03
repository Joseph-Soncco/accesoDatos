<?php

require_once '../models/Mascota.php';

$mascota = new Mascota();

$parametros = [
  "idpropietario"   => 2,
  "tipo"            => "Gato",
  "nombre"          => "Chifu", 
  "color"           => "Gris con Blanco",
  "genero"          => "Macho",
  "idmascota"       => 5
];

$num = $mascota->update($parametros);
var_dump($num);