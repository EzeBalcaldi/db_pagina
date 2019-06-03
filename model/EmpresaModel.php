<?php

class EmpresaModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect()
  {
    return new PDO('pgsql:host=dbases.exa.unicen.edu.ar; dbname = cursada; user = unc_249407; password = mateo123');
  }

  function GetEstanteria(){
    $sentencia = $this->db->prepare( "select * from gr01_estanteria");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function GetPosLibres($fecha){
    $sentencia = $this->db->prepare( "select * from FN_01_ListaPosLibres(?)");
    $sentencia->execute(array($fecha));
    return $sentencia->fetchAll();
}
  function Get10Clientes(){
    $sentencia = $this->db->prepare( "select * from GR01_clientes_mas_gastaron");
    $sentencia->execute();
    return $sentencia->fetchAll();
  }
  function GetAlquileresEnVencimiento($fecha){
    $sentencia = $this->db->prepare( "select * from FN_01_ClientesVencimiento");
    $sentencia->execute(array($fecha));
    return $sentencia->fetchAll();
  }

}


 ?>
