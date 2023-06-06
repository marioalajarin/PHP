<?php
require_once('operaciones.php');
class Escritorio implements operaciones{

public string $nombre;

public function __construct($nombre){
    $this->nombre=$nombre;
}

public function verEscritorio(){
    return "<p>La aplicación de escritorio se llama ".$this->nombre."</p>";
}

//implementar los métodos de la interface
function sumar(int $x, int $y){
    return x+y;
}
function llamar(string $nombre){
    return "llamando a ".$nombre;
}
function mostrar(bool $diseño){
    return "mostrando ".$diseño;
}

}//cierra clase