{include file="header.tpl"}
	<div class="separation">
    </div>
	<div class="weight_form_small">
		{foreach from=$game_detail item=game}
			<form action="save_update_game/{$game->id_juego}" method="POST">
				<div class="form-group col-md-10 offset-1">
					<input type="hidden" name="id_juego" class="form-control" id="id_juego" placeholder="Id juego" value="{$game->id_juego}">
				</div>
				<div class="form-group col-md-10 offset-1">
					<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" value="{$game->nombre}">
					<small id="nombre" class="form-text text-muted">Nombre del juego</small>
				</div>
				<div class="form-group col-md-10 offset-1">
					<input type="text" name="plataforma" class="form-control" id="plataforma" placeholder="Plataforma" value="{$game->plataforma}">
					<small id="nombre" class="form-text text-muted">Plataforma</small>
				</div>	
				<div class="form-group col-md-10 offset-1"> 	
					<select name="categoria" class="form-control">
						{foreach from=$category_detail item=categories}
							<option>{$categories->nombre_categoria}</option>
						{/foreach}
					</select>
					<small id="nombre" class="form-text text-muted">Categoría</small>	
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