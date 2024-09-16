# Contador de Visitas con PHP

Este proyecto implementa un contador de visitas simple utilizando PHP. Cada vez que se carga la página, el contador se incrementa y muestra el número total de visitas en la página. Si el número de visitas supera las 20, se mostrará un mensaje de felicitación.

## Descripción

El contador de visitas se almacena en un archivo de texto (`contadorVisitas.txt`). Cada vez que se carga la página, se lee el valor del archivo, se incrementa y se actualiza. El proyecto incluye un simple HTML y CSS para visualizar el número de visitas en pantalla.

## Requisitos

Para ejecutar este proyecto necesitas tener instalado:

- Un servidor web con soporte para PHP (por ejemplo, Apache o Nginx).
- PHP 5.3 o superior.

### Configuración del Entorno

1. Coloca los archivos en la raíz de tu servidor web o en un directorio de tu elección.
2. Asegúrate de tener un archivo `contadorVisitas.txt` en el mismo directorio. Si no existe, el código lo creará automáticamente al ejecutarse.

### Instalación de Dependencias

Este proyecto no tiene dependencias externas, solo necesitas un entorno PHP funcionando.

## Cómo Ejecutar el Proyecto

1. Asegúrate de que el archivo `contadorVisitas.txt` tiene permisos de lectura y escritura. Si no existe, el script lo creará.
2. Abre la página en un navegador web para incrementar el contador cada vez que se cargue la página.

http://localhost/carpeta_proyecto/contador_visitas.php

## Explicación del Código

- Apertura del archivo: El script abre el archivo contadorVisitas.txt para leer el número de visitas actuales.
- Lectura y actualización: Se incrementa el valor de visitas y se vuelve a escribir en el archivo.
- Felicitación: Si el número de visitas supera las 20, se muestra un mensaje de felicitación.
- Visualización: El número de visitas y la felicitación se muestran en la página HTML.

## Resultados
El script mostrará el número de visitas en la página:

- Número de visitas: El contador de visitas se incrementa y muestra el número total en la página.
- Mensaje de felicitación: Se muestra si el número de visitas supera las 20.
- 
## Personalización
Puedes modificar el valor del umbral de felicitación cambiando la condición if($nb_visitas > 20) en el código PHP para ajustarlo a tus necesidades.

## Licencia
Este proyecto está bajo la Licencia MIT. Puedes encontrar más detalles en el archivo LICENSE.
