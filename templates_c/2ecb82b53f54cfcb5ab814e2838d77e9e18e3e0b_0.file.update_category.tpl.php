<?php
/* Smarty version 3.1.33, created on 2019-11-17 22:33:33
  from 'E:\xampp\htdocs\TPE_WEB2\templates\update_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd1bcad217224_41344533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ecb82b53f54cfcb5ab814e2838d77e9e18e3e0b' => 
    array (
      0 => 'E:\\xampp\\htdocs\\TPE_WEB2\\templates\\update_category.tpl',
      1 => 1574026401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dd1bcad217224_41344533 (Smarty_Internal_Template $_smarty_tpl) {
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
				<div class="form-row">
					<div class="form-group col-md-6">
						<input type="text" name="nombre_categoria" class="form-control" placeholder="Categoria" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->nombre_categoria;?>
">
					</div>
					<div class="form-group col-md-6">
						<input type="text" name="descripcion" class="form-control" placeholder="Categoria" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->descripcion;?>
">
					</div>	
				</div>
				<div class="form-row">
					<input type="submit" name="save" value="Guardar" class="btn btn-primary form-group col-md-12"> 
					<input type="submit" name="cancel" value="Cancelar" class="btn btn-primary form-group col-md-12">
				</div>
			</form>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
