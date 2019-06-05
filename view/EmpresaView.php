<?php

require_once ('./libs/Smarty.class.php');

class EmpresaView
{
  private $Smarty;

  function __construct()
  {
    $this->Smarty = new Smarty();
  }

  function MostrarHome()
  {
    $this->Smarty->display('templates/HomeBase.tpl');
  }


  function GetPosLibresuOcupadas($fecha,$posLibres,$posOcupadas,$id)
  {
    $this->Smarty->assign('fecha',$fecha);
    $this->Smarty->assign('posLibres',$posLibres);
    $this->Smarty->assign('posOcupadas',$posOcupadas);
    $this->Smarty->assign('id',$id);
    $this->Smarty->display('templates/HomePosLibres-Ocupadas.tpl');
  }
  function Mostrar10Clientes($datos){
    $this->Smarty->assign('datos',$datos);
    $this->Smarty->display('templates/Home10Clientes.tpl');
  }
  function MostrarAlquileresEnVencimiento($datos){
    $this->Smarty->assign('datos',$datos);
    $this->Smarty->display('templates/HomeAlquileres.tpl');
  }



}

 ?>
