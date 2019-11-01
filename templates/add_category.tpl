{include file="header.tpl"}
	<div class="separation">
    </div>
	<div class="weight_form_small">
		<form action="save_category" method="POST" >
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="nombre_categoria">Categoria</label>
				    <input type="text" class="form-control" name="nombre_categoria" id="nombre_categoria" placeholder="Categoria">
				</div>
				<div class="form-group col-md-6">
					<label for="descripcion">Descripcion</label>
				    <input type="text" class="form-control" name="descripcion"id="descripcion" placeholder="Descripcion">
			    </div>
			</div>
			<div class="form-row">
				<input type="submit" name="save" value="Agregar" class="btn btn-primary form-group col-md-6">
				<input type="submit" name="cancel" value="Cancelar" class="btn btn-primary form-group col-md-6">
			</div>
		</form>
	</div>
{include file="footer.tpl"}