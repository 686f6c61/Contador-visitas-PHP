<?php

// Abrimos el archivo 'contadorVisitas.txt'. 'r+' permite abrir el archivo para lectura y escritura.
// Si el archivo no existe, se debe crear manualmente o usar 'a+' en lugar de 'r+' para crearlo automáticamente.
$recurso = fopen('contadorVisitas.txt', 'r+');

// Leemos la primera línea del archivo que contiene el número de visitas actuales.
// La función fgets lee una línea completa desde el archivo y devuelve su contenido.
$nb_visitas = fgets($recurso); 

// Comprobamos si el archivo está vacío, es decir, si la variable $nb_visitas no contiene ningún valor.
// Esto ocurre la primera vez que se ejecuta el script y no hay ningún dato en el archivo.
if($nb_visitas == "") { 
    $nb_visitas = 0;  // Si está vacío, inicializamos el contador de visitas en 0.
}

// Incrementamos el número de visitas en 1 cada vez que se ejecuta este archivo.
// El incremento se hace tras haber leído el valor anterior de visitas.
$nb_visitas++; 

// fseek mueve el puntero de lectura/escritura al inicio del archivo (posición 0).
// Esto es necesario para sobrescribir el número de visitas actualizado.
fseek($recurso, 0); 

// Escribimos el nuevo número de visitas en el archivo. fputs escribe una cadena en el archivo.
fputs($recurso, $nb_visitas); 

// Cerramos el archivo para liberar recursos del sistema y garantizar que los cambios se guarden correctamente.
fclose($recurso);

// Inicializamos la variable $felicitacion, que contendrá un mensaje especial si el número de visitas supera las 20.
$felicitacion = "";

// Si el número de visitas es mayor a 20, asignamos un mensaje de felicitación a la variable $felicitacion.
if($nb_visitas > 20){
    $felicitacion = "Enhorabuena. Has llegado a las 20 visitas";
}

?>
