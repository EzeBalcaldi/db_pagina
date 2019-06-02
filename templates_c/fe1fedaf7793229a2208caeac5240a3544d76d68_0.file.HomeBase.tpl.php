<?php
/* Smarty version 3.1.33, created on 2019-06-02 23:51:30
  from 'C:\xampp\htdocs\proyectos\TP-Bases\templates\HomeBase.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf444e275de85_67535367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe1fedaf7793229a2208caeac5240a3544d76d68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TP-Bases\\templates\\HomeBase.tpl',
      1 => 1559512281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/NavBar.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5cf444e275de85_67535367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Bienvenido a WMS Tandil</h1>
    <p>A continuacion podras ingresar una fecha para saber cuales son las posiciones libres.</p>
  </div>
  <div class="imagennet">

  </div>
</div>
<section>
    <div class="container">
      <div class="row cont ">
        <div class="col-3 roles">
        <form  method="post" action="GetPosLibres">
          <div class="form-group">
            <label >Ingresar fecha</label>
            <input type="date"  class="FechaForm" id="FechaForm" name="FechaForm" >
            <date-input date="date" timezone="timezone"></date-input>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

      <div class="col-9 roles">
      <div class="card icono2" style="width: 18rem;">
        <a class="nav-link active home" href="ciudadano">
        <img class="card-img-top" src="imagenes/usuario.png" alt="Card image cap">
              </a>
        <div class="card-body">

            <p class="card-text">Ciudadano</p>
                </div>
        </div>
      </div>
      </div>
    </div>
    </div>



</section>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
