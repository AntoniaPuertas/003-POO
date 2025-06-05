<?php
/**
* Crear la clase Alumno que guarde la siguiente información:
* nombre, edad, matematicas, lengua, historia (la nota de cada una)
* funciones: que devuelva un string con el nombre y la edad del alumno/a 
* que calcule la nota media de todas las asignaturas
* que diga si está aprobado o no
* utilizar el modo stricto
*/

declare(strict_types=1);

class Alumno{
    private string $nombre;
    private int $edad;
    private float $matematicas;
    private float $lengua;
    private float $historia;

    public function __construct(string $nombre, int $edad, float $matematicas, float $lengua, float $historia)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->matematicas = $matematicas;
        $this->lengua = $lengua;
        $this->historia = $historia;
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function getEdad():int{
        return $this->edad;
    }

    public function getMatematicas():float{
        return $this->matematicas;
    }

    public function getLengua():float{
        return $this->lengua;
    }

    public function getHistoria():float{
        return $this->historia;
    }

    public function setNombre(string $nuevoNombre){
        $this->nombre = $nuevoNombre;
    }

    public function setEdad(int $nuevaEdad){
        $this->edad = $nuevaEdad;
    }

    public function setMatematicas(float $nuevaNota):bool{
        //comprobar que la nota sea un valor entre 0 y 10
        if($nuevaNota < 0 || $nuevaNota > 10){
            return false;
        }
        $this->matematicas = $nuevaNota;
        return true;

        // $valida = ($nuevaNota < 0 || $nuevaNota > 10)? false : true;
        // $this->matematicas = $valida ? $nuevaNota : $this->matematicas;
        // return $valida;
    }

    public function setLengua(float $nuevaNota):bool{
        //comprobar que la nota sea un valor entre 0 y 10
        if($nuevaNota < 0 || $nuevaNota > 10){
            return false;
        }
        $this->lengua = $nuevaNota;
        return true;
    }

    public function setHistoria(float $nuevaNota):bool{
        //comprobar que la nota sea un valor entre 0 y 10
        if($nuevaNota < 0 || $nuevaNota > 10){
            return false;
        }
        $this->historia = $nuevaNota;
        return true;
    }

    public function getInfo():string{
        return "El/la alumno/a se llama: " . $this->nombre . " y tiene " . $this->edad . " años.";
    }

    public function getNotaMedia():float{
        $notaMedia = ($this->matematicas + $this->lengua + $this->historia)/3;
        return $notaMedia;
    }

    public function estaAprobado():bool{
        return $this->getNotaMedia() >= 5.0;
    }

    public function getEstadoAprobacion():string{
        if($this->estaAprobado()){
            return "Aprobado";
        }else{
            return "Suspenso";
        }
    }

    public function estaAprobadoYMediaString():string{
        $notaMedia = $this->getNotaMedia();
        if($notaMedia >= 5){
            return "Aprobado (nota media: ". number_format($notaMedia, 2) .")" ;
        }else{
            return "Suspenso (nota media: ". number_format($notaMedia, 2) .")";
        }
    }

}
