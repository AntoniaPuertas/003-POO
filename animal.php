<?php
declare(strict_types=1);

class Animal {
    private string $nombre;
    private int $edad;

    //función que se ejecuta cuando creamos un objeto de esta clase
    //también se dice crear una instancia
    public function __construct(string $nombrePrimero, int $edadPrimero)
    {
        $this->nombre = $nombrePrimero;
        $this->edad = $edadPrimero;
    }

    //getters son funciones que devuelven el valor de los atributos
    public function getNombre():string{
        return $this->nombre;
    }

    public function getEdad():int{
        return $this->edad;
    }

    //setters son funciones que se utilizan para asignar nuevos valores a los atributos
    public function setNombre(string $nuevoNombre){
        $this->nombre = $nuevoNombre;
    }

    public function setEdad(int $nuevaEdad):bool{
        if($nuevaEdad < 0 || $nuevaEdad > 50){
            return false;
        }
        $this->edad = $nuevaEdad;
        return true;
    }

    public function getInfo():string{
        return "Este animal se llama " . $this->nombre . " y tiene " . $this->edad . " años.";
    }
}