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


  function MostrarPosLibres($datos)
  {
    $this->Smarty->assign('datos',$datos);
    $this->Smarty->display('templates/HomePosLibres.tpl');
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
