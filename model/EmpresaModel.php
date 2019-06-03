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
    return new PDO('pgsql:host=dbases.exa.unicen.edu.ar; port = 6432; dbname = cursada; user = unc_249407; password = mateo123');
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

  function GetUsuario($id_usuario){
    $sentencia = $this->db->prepare( "select id_usuario from usuario where id_usuario=? limit 1");
    $sentencia->execute(array($id_usuario));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }


  function GuardarDenuncia($longitud,$latitud,$descripcion,$estado,$id_usuario)  {
    $sentencia = $this->db->prepare("INSERT INTO denuncia(longitud,latitud,descripcion,estado,id_usuario) VALUES(?,?,?,?,?)");
  $sentencia->execute(array($longitud,$latitud,$descripcion,$estado,$id_usuario));
}



}


 ?>
