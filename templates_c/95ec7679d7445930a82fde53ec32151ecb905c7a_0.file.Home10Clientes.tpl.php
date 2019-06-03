<?php
/* Smarty version 3.1.33, created on 2019-06-03 23:25:59
  from 'C:\xampp\htdocs\proyectos\PagBases\templates\Home10Clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf59067f3c399_60027230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95ec7679d7445930a82fde53ec32151ecb905c7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\PagBases\\templates\\Home10Clientes.tpl',
      1 => 1559597159,
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
function content_5cf59067f3c399_60027230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:templates/NavBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Bienvenido a WMS Tandil</h1>
    <p>Debajo podrás ver nuestros mejores clientes.</p>
  </div>
  <div class="imagennet">
  </div>
</div>
      <div class="container-fluid">
        <table class="table table-hover">
          <thead class="bg-primary" style="color:white;" >
              <tr>
                      <th scope="col">Cuit/cuil</th>
                      <th scope="col">Cantidad gastada</th>
                </tr>
              </thead>
            <tbody class="contenedor-tabla" >
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datos']->value, 'dato');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
?>
                <tr>
                      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['dato']->value['id_cliente'];?>
</th>
                      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['dato']->value['cantidad gastada'];?>
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
