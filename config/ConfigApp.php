<?php

//define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
//define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"]. ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]));
//dirname($_SERVER["PHP_SELF"]);
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/home');
define('formulario', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/formulario');



class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      'Home' => 'EmpresaController#Home',
      'GetPosLibresuOcupadas' => 'EmpresaController#GetPosLibresuOcupadas'
    //  'Get10Clientes' => 'EmpresaController#Get10Clientes',
      //'GetPosOcupadas' => 'EmpresaController#GetPosOcupadas'


      // 'jefe'=> 'JefeController#Home',
      // 'ciudadano'=> 'CiudadanoController#Home',
      // 'formulario'=>'CiudadanoController#mostrarFormulario',
      // //Esto es para ver el mapa del jefe, pero no pude probar si anda
      // 'mapajefe'=> 'JefeController#VerMapaJefe',
      // 'AgregarDenuncia'=> 'CiudadanoController#InsertarDenuncia'
    ];

    }
 ?>
