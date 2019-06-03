<?php
/* Smarty version 3.1.33, created on 2019-06-03 23:11:22
  from 'C:\xampp\htdocs\proyectos\PagBases\templates\HomePosLibres.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf58cfa76ff21_88204983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e742980e438305550842299311b2ecccd075eb6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\PagBases\\templates\\HomePosLibres.tpl',
      1 => 1559595892,
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
function content_5cf58cfa76ff21_88204983 (Smarty_Internal_Template $_smarty_tpl) {
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




      <div class="container-fluid">
        <table class="table table-hover">
          <thead class="bg-primary" style="color:white;" >
              <tr>
                      <th scope="col">Numero Posicion</th>
                      <th scope="col">Numero Estanteria</th>
                      <th scope="col">Numero Fila </th>
                </tr>
              </thead>
            <tbody class="contenedor-tabla" >
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'dato');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
?>
                <tr>
                      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['dato']->value['nro_posicion'];?>
</th>
                      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['dato']->value['nro_estanteria'];?>
</th>
                      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['dato']->value['nro_fila'];?>
</th>

                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </tbody>
        </table>
      </div>






</section>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
