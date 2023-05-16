<?php
include_once('Computador.php');

//Creamos el objeto con los valores que se definen en el contructor
$computador = new Computador('Fernado', 'Garcia', 12, 'Fernado', 'Garcia', 12, 'Fernado', 'Garcia', 12,
'Fernado', 'Garcia', 12,'Fernado', 'Garcia', 12, 12);

//Mostramos por pantalla los valores
echo $computador->saludar();

//Destruimos el objeto
unset($computador);



//