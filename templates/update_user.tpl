{include file="header.tpl"}
	<div class="separation">
    </div>
	<div class="weight_form_small">
		{foreach from=$user_detail item=user}
		<form action="save_update_user/{$user->email}" method="POST">
			<!-- <div class="form-group col-md-10 offset-1">
				<input type="hidden" name="id_juego" class="form-control" id="id_juego" placeholder="Id juego" value="{$game->email}">
			</div> -->
			<div class="form-group col-md-10 offset-1">
				<input type="text" name="email" class="form-control" id="email" placeholder="email" value="{$user->email}">
				<small id="email" class="form-text text-muted">Email</small>
			</div>
			<div class="form-group col-md-10 offset-1"> 	
				<select name="categoria" class="form-control">
					{foreach from=$user_detail_permiso item=users}
						<option>{$users->permiso}</option>
					{/foreach}
				</select>
				<small id="permiso" class="form-text text-muted">Permiso</small>	
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
		{/foreach}
	</div>
{include file="footer.tpl"}