{include file="header.tpl"}
	<div class="separation">
    </div>
	<div class="weight_form_small">
		{foreach from=$game_detail item=game}
			<form action="save_update_game/{$game->id_juego}" method="POST">
				<div class="form-row">
					<div class="form-group col-md-6">
						<input type="text" name="id_juego" class="form-control" id="id_juego" placeholder="Id juego" value="{$game->id_juego}">
					</div>
					<div class="form-group col-md-6">
						<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" value="{$game->nombre}">
					</div>
					<div class="form-group col-md-6">
						<input type="text" name="plataforma" class="form-control" id="plataforma" placeholder="Plataforma" value="{$game->plataforma}" >
					</div>	
					<div class="form-group col-md-6">
						<input type="text" name="categoria" class="form-control" id="categoria" placeholder="Categoria" value="{$game->categoria}" >
					</div>
				</div>
				<div class="form-row">
					<input type="submit" name="save" value="Guardar" class="btn btn-primary form-group col-md-12">
					<input type="submit" name="cancel" value="Cancelar" class="btn btn-primary form-group col-md-12">
				</div>
			</form>
		{/foreach}
	</div>
{include file="footer.tpl"}