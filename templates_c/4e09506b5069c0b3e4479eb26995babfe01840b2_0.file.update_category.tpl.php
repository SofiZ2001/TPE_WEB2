<?php
/* Smarty version 3.1.33, created on 2019-12-02 23:23:02
  from 'C:\xampp\htdocs\TPE_WEB2\templates\update_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de58ec6e929b9_82175919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e09506b5069c0b3e4479eb26995babfe01840b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\update_category.tpl',
      1 => 1575321811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5de58ec6e929b9_82175919 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div class="separation">
    </div>
	<div class="weight_form_small">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_detail']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
			<form action="save_update_category/<?php echo $_smarty_tpl->tpl_vars['category']->value->nombre_categoria;?>
" method="POST">
				<div class="form-group col-md-10 offset-1">
					<input type="text" name="nombre_categoria" id="name" class="form-control" placeholder="Categoria" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->nombre_categoria;?>
">
					<small id="name" class="form-text text-muted">Nombre del juego</small>
				</div>
				<div class="form-group col-md-10 offset-1">
					<input type="text" name="descripcion" id="description" class="form-control" placeholder="Categoria" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->descripcion;?>
">
					<small id="description" class="form-text text-muted">Descripcion del juego</small>
				</div>
				<div class="d-flex flex-column">
					<div class="p-2 col-md-6 offset-3">
				  		<input type="submit" name="save" value="Guardar" class="btn btn-primary form-group col-md-12">
					</div>
					<div class="p-2 col-md-6 offset-3">
				  		<input type="submit" name="cancel" value="Cancelar" class="btn btn-primary form-group col-md-12">
					</div>
				</div>	
			</form>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php }
}
