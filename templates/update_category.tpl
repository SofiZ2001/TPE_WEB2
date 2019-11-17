{include file="header.tpl"}
	<div class="separation">
    </div>
	<div class="weight_form_small">
		{foreach from=$category_detail item=category}
			<form action="save_update_category/{$category->nombre_categoria}" method="POST">
				<div class="form-row">
					<div class="form-group col-md-6">
						<input type="text" name="nombre_categoria" class="form-control" placeholder="Categoria" value="{$category->nombre_categoria}">
					</div>
					<div class="form-group col-md-6">
						<input type="text" name="descripcion" class="form-control" placeholder="Categoria" value="{$category->descripcion}">
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