{include file="header.tpl"}
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
				<p>{$message}</p>
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
{include file="footer.tpl"}