<?php
/* Smarty version 3.1.33, created on 2019-06-03 23:31:42
  from 'C:\xampp\htdocs\proyectos\PagBases\templates\NavBar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf591beb470d2_61866395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db7e67282017f4bc3431a3ae3b7e3e3e83a8ecfb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\PagBases\\templates\\NavBar.tpl',
      1 => 1559597501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf591beb470d2_61866395 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="contenedor_Navbar barra">

    <nav class="navbar navbar-expand-xl navbar-dark bg-primary  ">
    <!-- <a class="navbar-brand " href="#">Municipio de Tandil</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->

      <!-- Dentro de este div se crea una lista donde se encuentra cada boton de la navbar del lado izquierdo-->
      <div class="collapse navbar-collapse" id="navbarsExample06">
        <ul class="navbar-nav mr-auto">
          <!-- Dentro de cada "li" se crea un boton de la barra de navegacion -->
          <li class="nav-item active logonav">
          </li>
          <li class="nav-item active">
            <a class="nav-link btn btn-primary" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active bd-navbar-nav  flex-row">
            <a class="nav-link btn btn-primary" href="./Get10Clientes">Ver Mejores Clientes <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <!-- Dentro de este div se crea una lista donde se encuentra cada boton de la navbar del lado derecho-->
         <div class=" nav-item active  bd-navbar-nav flex-row">
           <a class=" nav-link btn btn-primary"  style="color: white;" href="./HomeAlquileres">¿Se vence tu alquiler?</a>
         </div>
         <div class=" nav-item active  bd-navbar-nav ">
           <a class=" nav-link btn btn-primary"  style="color: white;" href="#">Registrarte</a>
         </div>

        </div>
          </nav>
  </div>
<?php }
}
