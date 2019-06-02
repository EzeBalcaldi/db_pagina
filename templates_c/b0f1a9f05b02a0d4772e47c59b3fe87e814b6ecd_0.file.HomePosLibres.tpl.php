<?php
/* Smarty version 3.1.33, created on 2019-06-03 00:05:40
  from 'C:\xampp\htdocs\proyectos\TP-Bases\templates\HomePosLibres.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf44834cd4ce1_92617735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0f1a9f05b02a0d4772e47c59b3fe87e814b6ecd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\TP-Bases\\templates\\HomePosLibres.tpl',
      1 => 1559513136,
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
function content_5cf44834cd4ce1_92617735 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form method="post" action="GetPosLibres">
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

    <tbody>
      <tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'dato');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
?>
        <input type="text" name="" value="<?php echo $_smarty_tpl->tpl_vars['dato']->value['nro_posicion'];?>
">
        <td id="<?php echo $_smarty_tpl->tpl_vars['dato']->value['nro_posicion'];?>
">numero de posicion <?php echo $_smarty_tpl->tpl_vars['dato']->value['nro_posicion'];?>
</td>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <!-- <input type="" class="hidden" id="latitud <?php echo $_smarty_tpl->tpl_vars['']->value['id_denuncia'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['denuncia']->value['latitud'];?>
">
        <input type="" class="hidden" id="longitud <?php echo $_smarty_tpl->tpl_vars['denuncia']->value['id_denuncia'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['denuncia']->value['longitud'];?>
">
        <input type="" class="hidden" id="descripcion <?php echo $_smarty_tpl->tpl_vars['denuncia']->value['id_denuncia'];?>
"  value="<?php echo $_smarty_tpl->tpl_vars['denuncia']->value['descripcion'];?>
"> -->
      </tr>
    </tbody>



</section>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
