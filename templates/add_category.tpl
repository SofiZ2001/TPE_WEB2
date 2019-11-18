{include file="header.tpl"}
	<div class="separation">
    </div>
	<div class="weight_form_small">
		<form action="save_category" method="POST" >
			<div class="form-group col-md-10 offset-1">
			    <input type="text" class="form-control" name="nombre_categoria" id="nombre_categoria" placeholder="Categoria">
				<small id="categoria" class="form-text text-muted">Categoría</small>
			</div>
			<div class="form-group col-md-10 offset-1">
			    <input type="text" class="form-control" name="descripcion"id="descripcion" placeholder="Descripcion">
			    <small id="descripcion" class="form-text text-muted">Descripción</small>
			</div>
			<div class="d-flex flex-column">
				<div class="p-2 col-md-6 offset-3">
			  		<input type="submit" name="save" value="Agregar" class="btn btn-primary form-group col-md-12">
				</div>
				<div class="p-2 col-md-6 offset-3">
			  		<input type="submit" name="cancel" value="Cancelar" class="btn btn-primary form-group col-md-12">
				</div>
			</div>	
		</form>
	</div>
{include file="footer.tpl"}