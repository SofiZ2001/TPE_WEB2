<?php
/* Smarty version 3.1.33, created on 2019-11-22 13:08:09
  from 'E:\xampp\htdocs\TPE_WEB2\templates\update_game.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd7cfa90351d4_16095866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14dc98301ec7a66e3ccb50a0231385eb4a042352' => 
    array (
      0 => 'E:\\xampp\\htdocs\\TPE_WEB2\\templates\\update_game.tpl',
      1 => 1574424486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dd7cfa90351d4_16095866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<div class="separation">
    </div>
	<div class="weight_form_small">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['game_detail']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
			<form action="save_update_game/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
" method="POST">
				<div class="form-group col-md-10 offset-1">
					<input type="hidden" name="id_juego" class="form-control" id="id_juego" placeholder="Id juego" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
">
				</div>
				<div class="form-group col-md-10 offset-1">
					<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
">
					<small id="nombre" class="form-text text-muted">Nombre del juego</small>
				</div>
				<div class="form-group col-md-10 offset-1">
					<input type="text" name="plataforma" class="form-control" id="plataforma" placeholder="Plataforma" value="<?php echo $_smarty_tpl->tpl_vars['game']->value->plataforma;?>
">
					<small id="nombre" class="form-text text-muted">Plataforma</small>
				</div>	
				<div class="form-group col-md-10 offset-1"> 	
					<select name="categoria" class="form-control">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category_detail']->value, 'categories');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categories']->value) {
?>
							<option><?php echo $_smarty_tpl->tpl_vars['categories']->value->nombre_categoria;?>
</option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
					<small id="nombre" class="form-text text-muted">Categoría</small>	
				</div>
				<div class="form-group col-md-10 offset-1">
		            <input type="file" name="uploaded_file" id="upload_file">
		    	    <small id="uploaded_file" class="form-text text-muted">Seleccione una imagen</small>
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
}
}
