<?php
/**
 * Crear un array con 10 alumnos
 * Mostrar una lista con el nombre, edad y nota media de los alumnos
 * Mostrar el número de alumnos aprobados
 * Mostrar la nota media de matemáticas de todos los alumnos
 * Mostrar la nota media de lengua de todos los alumnos
 * Mostrar la nota media de historia de todos los alumnos
 * Mostrar una lista con los alumnos suspensos
 */

 require_once 'alumno.php';

 $alumnos = [
    [
        "nombre" => "Ana García",
        "edad" => 16,
        "matematicas" => 8.5,
        "lengua" => 9.2,
        "historia" => 7.8
    ],
    [
        "nombre" => "Jose Lorenzo",
        "edad" => 17,
        "matematicas" => 6.3,
        "lengua" => 5.2,
        "historia" => 7.4
    ],
    [
        "nombre" => "Inma",
        "edad" => 19,
        "matematicas" => 5.2,
        "lengua" => 6.2,
        "historia" => 9.9
    ],
    [
        "nombre" => "Edgar",
        "edad" => 21,
        "matematicas" => 7.1,
        "lengua" => 6,
        "historia" => 8
    ],
    [
        "nombre" => "Laura",
        "edad" => 23,
        "matematicas" => 4.5,
        "lengua" => 7,
        "historia" => 7
    ],
        [
        "nombre" => "Rocio",
        "edad" => 26,
        "matematicas" => 4.5,
        "lengua" => 3,
        "historia" => 4
    ],
];

// $alumnos2 = [
//     new Alumno("MariSol", "23", 9,8,7),
//     new Alumno("Jesús", "42", 6,7,5),
//     new Alumno("Antonia", "46", 4,3,5),
// ];
$arrayAlumnos = [];
echo '<ul>';
foreach($alumnos as $index => $alumno){
    $nuevoAlumno = new Alumno($alumno['nombre'], $alumno['edad'], $alumno['matematicas'], $alumno['lengua'], $alumno['historia']);
    $arrayAlumnos[] = $nuevoAlumno;

    $notaMedia = $nuevoAlumno->getNotaMedia();
    echo '<li>';
    echo $nuevoAlumno->getInfo() . " " .  $nuevoAlumno->estaAprobadoYMediaString();
    echo '</li>';
}
echo '</ul>';

//mostrar nota media de todos los alumnos de cada asignatura
$sumaMatematicas = 0;
$sumaLengua = 0;
$sumaHistoria = 0;
foreach($arrayAlumnos as $alumno){
    $sumaMatematicas += $alumno->getMatematicas();
    $sumaLengua += $alumno->getLengua();
    $sumaHistoria += $alumno->getHistoria();
}
$mediaMatematicas = $sumaMatematicas / count($arrayAlumnos);
$mediaLengua = $sumaLengua / count($arrayAlumnos);
$mediaHistoria = $sumaHistoria / count($arrayAlumnos);
echo '<br>';
echo "Nota media de todos los alumnos: ";
echo '<br>';
echo "Nota media de matemáticas: " . number_format($mediaMatematicas,2);
echo '<br>';
echo "Nota media de lengua: " . number_format($mediaLengua,2);
echo '<br>';
echo "Nota media de historia: " . number_format($mediaHistoria,2);

$suspensos = array_filter($arrayAlumnos, fn($a) => !$a->estaAprobado());
echo '<br>';
echo "Alumnos suspensos: ";
echo '<br>';
foreach($suspensos as $alumno){
    echo '-' . $alumno->getNombre() . ' (media: '. number_format($alumno->getNotaMedia(), 2)  .')';
    echo '<br>';
}

foreach($arrayAlumnos as $alumno){
    if(!$alumno->estaAprobado()){
        echo '-' . $alumno->getNombre() . ' (media: '. number_format($alumno->getNotaMedia(), 2)  .')';
        echo '<br>';
    }
}