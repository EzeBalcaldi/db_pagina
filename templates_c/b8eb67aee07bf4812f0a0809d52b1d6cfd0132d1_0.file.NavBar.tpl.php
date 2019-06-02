<?php
/* Smarty version 3.1.33, created on 2019-06-02 22:10:39
  from 'C:\xampp\htdocs\proyectos\TP-Bases\templates\NavBar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf42d3f36b1b1_47388300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8eb67aee07bf4812f0a0809d52b1d6cfd0132d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TP-Bases\\templates\\NavBar.tpl',
      1 => 1559506236,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf42d3f36b1b1_47388300 (Smarty_Internal_Template $_smarty_tpl) {
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
            <a class="nav-link btn btn-primary" href="#">Contactos <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <!-- Dentro de este div se crea una lista donde se encuentra cada boton de la navbar del lado derecho-->
         <div class=" nav-item active  bd-navbar-nav flex-row">
           <a class=" nav-link btn btn-primary"  style="color: white;" href="#">Iniciar Sesión</a>
         </div>
         <div class=" nav-item active  bd-navbar-nav ">
           <a class=" nav-link btn btn-primary"  style="color: white;" href="#">Registrarte</a>
         </div>

        </div>
          </nav>
  </div>
<?php }
}
