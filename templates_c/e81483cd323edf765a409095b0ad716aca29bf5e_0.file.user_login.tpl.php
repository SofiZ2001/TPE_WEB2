<?php
/* Smarty version 3.1.33, created on 2019-11-18 19:11:06
  from 'E:\xampp\htdocs\TPE_WEB2\templates\user_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd2deba0a1c80_64709427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e81483cd323edf765a409095b0ad716aca29bf5e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\TPE_WEB2\\templates\\user_login.tpl',
      1 => 1574098972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dd2deba0a1c80_64709427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="separation">
    </div>
	<div class="weight_form_small">
		<form action="login_verify" method="POST">
			<div class="form-group">
				<input type="text" class="form-control" name="email" id="email" placeholder="Email">
				<small id="emailHelp" class="form-text text-muted">No olvide colocar el @</small>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" id="password_id" name="password" placeholder="Password">
				<small id="password_id" class="form-text text-muted">Password</small>
			</div>
			<div>
				<p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
			</div>
			<div class="d-flex flex-column">
				<div class="p-2 col-md-8 offset-2">
			  		<input type="submit" class="btn btn-primary col-md-12" name="register" value="Registrarse"></input>
				</div>
				<div class="p-2 col-md-8 offset-2">
			  		<input type="submit" class="btn btn-primary col-md-12" name="login" value="Iniciar sesión"></input>
				</div>
				<div class="p-2 col-md-8 offset-2">
					<input type="submit" class="btn btn-primary col-md-12" name="invitado" value="Entrar como invitado"></input>
				</div>
			</div>
		</form>
	</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
