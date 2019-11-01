{include file="header.tpl"}
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
				<p>{$message}</p>
			</div>
			<div class= "row">
				<input type="submit" class="btn btn-primary col-md-6" name="register" value="Registrarse"></input>
				<input type="submit" class="btn btn-primary col-md-6" name="login" value="Iniciar sesión"></input>
			</div>
		</form>
	</div>
{include file="footer.tpl"}