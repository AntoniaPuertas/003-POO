<?php
/*
    Programación orientada a objetos
    Es un paradigma de programación que organiza el códgio en torno a objetos y clases
    Las clases son una estructura de datos que contienen atributos y métodos
    Este tipo de programación nos permite estructurar mejor nuestros programas y seguir las buenas prácticas de programación
*/

require_once 'animal.php';

//crear una instancia de la clase animal
$perro = new Animal('Tula', 16);

//acceder a un atributo de la clase
// echo "Mi perrita se llama " . $perro->nombre;

// $perro->nombre = 'Gila';

// echo "Mi perrita se llama " . $perro->nombre;

//acceder a un atributo de la clase con get
echo "Mi perrita se llama " . $perro->getNombre() . " y tiene " . $perro->getEdad() . " años";

//cambiar el valor de un atributo
$perro->setEdad(15);
echo '<br>';
echo "Mi perrita se llama " . $perro->getNombre() . " y tiene " . $perro->getEdad() . " años";

echo '<br>';
echo $perro->getInfo();

if(!$perro->setEdad(40)){
    echo '<br>';
    echo "Un animal no puede tener esa edad";
}else{
    echo '<br>';
    echo $perro->getInfo();
}