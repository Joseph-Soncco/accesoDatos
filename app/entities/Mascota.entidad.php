<?php
/**
 * La entidad contiene todos los atributos de la clase
 * estos datos se utilizaran en create(), update()
 */
class MascotaEntidad{
  private $idmascota;
  private $idpropietario;
  private $tipo;
  private $nombre;
  private $color;
  private $genero;
  private $vive;

  //Método mágicos de acceso
  public function __GET($atributo){
    return $this->$atributo;
  }
  public function __SET($atributo, $valor){
    $this->$atributo = $valor;
  }

}