<?php
/* Smarty version 3.1.33, created on 2019-11-17 22:04:49
  from 'E:\xampp\htdocs\TPE_WEB2\templates\user_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd1b5f1af1419_71614141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e81483cd323edf765a409095b0ad716aca29bf5e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\TPE_WEB2\\templates\\user_login.tpl',
      1 => 1574017772,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dd1b5f1af1419_71614141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="separation">
    </div>
	<div class= "weight_form_small">
		<form action="login_verify" method="POST">
			<div class="form-group">
				<label for="email">Usuario</label>
				<input type="text" class="form-control" name="email" id="email" placeholder="Email">
				<small id="emailHelp" class="form-text text-muted">No olvide colocar el @</small>
			</div>
			<div class="form-group">
				<label for="password_id">Password</label>
				<input type="password" class="form-control" id="password_id" name="password" placeholder="Password">
			</div>
			<div>
				<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
			</div>
			<div class= "row">
				<input type="submit" class="btn btn-primary col-md-6" name="register" value="Registrarse"></input>
				<input type="submit" class="btn btn-primary col-md-6" name="login" value="Iniciar sesión"></input>
			</div>
		</form>
	</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
