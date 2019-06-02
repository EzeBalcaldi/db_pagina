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



}

 ?>
