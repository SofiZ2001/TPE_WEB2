{include file="header.tpl"}
<div class="weight_form_small">
	<form action="save_game" method="POST">
		<div class="form-row">
			<div class="form-group col-md-4">
				<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" id="nombre">
			</div>
			<div class="form-group col-md-4">
				<input type="text" class="form-control" name="plataforma" id="plataforma" placeholder="Plataforma">
			</div>
			<div> 	
				<select name="categoria" class="form-control">
					{foreach from=$category_list item=categories}
						<option>{$categories->nombre_categoria}</option>
					{/foreach}
				</select>	
			</div>
			<div class="form-row col-md-12">
				<input type="submit" name="save" value="Agregar" class="btn btn-primary form-group col-md-6">
				<input type="submit" name="cancel" value="Cancelar" class="btn btn-primary form-group col-md-6">
			</div>	
		</div>
	</form>
</div>
{include file="footer.tpl"}
		       