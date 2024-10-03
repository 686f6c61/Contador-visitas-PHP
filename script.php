<?php

// Ruta del archivo que contiene el número de visitas
$archivo = 'contadorVisitas.txt';

// Comprobamos si el archivo existe, si no, lo creamos con el valor inicial de 0
if (!file_exists($archivo)) {
    file_put_contents($archivo, '0');
}

// Abrimos el archivo en modo lectura y escritura
$recurso = fopen($archivo, 'r+');

// Verificamos si se pudo abrir el archivo correctamente
if ($recurso === false) {
    die('Error al abrir el archivo de visitas.');
}

// Intentamos bloquear el archivo para evitar problemas de concurrencia
if (flock($recurso, LOCK_EX)) {

    // Leemos el número de visitas desde el archivo
    $nb_visitas = fgets($recurso);

    // Si no hay valor en el archivo, lo inicializamos a 0
    if ($nb_visitas === false || !is_numeric(trim($nb_visitas))) {
        $nb_visitas = 0;
    } else {
        $nb_visitas = (int)$nb_visitas;
    }

    // Incrementamos el contador de visitas
    $nb_visitas++;

    // Mover el puntero al inicio del archivo para sobrescribir
    fseek($recurso, 0);

    // Truncamos el archivo para evitar residuos de datos
    ftruncate($recurso, 0);

    // Escribimos el nuevo valor de visitas
    fputs($recurso, $nb_visitas);

    // Liberamos el bloqueo
    flock($recurso, LOCK_UN);

} else {
    // No se pudo obtener el bloqueo
    die('No se pudo bloquear el archivo.');
}

// Cerramos el archivo
fclose($recurso);

// Generamos el mensaje de felicitación si las visitas son mayores a 20
$felicitacion = ($nb_visitas > 20) ? "Enhorabuena. Has llegado a las 20 visitas" : "";

// Puedes mostrar el número de visitas y el mensaje de felicitación si lo deseas
echo "Visitas: " . $nb_visitas . "<br>";
echo $felicitacion;

?>
