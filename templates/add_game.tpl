{include file="header.tpl"}
<div class="weight_form_small">
	<form action="save_game" method="POST" enctype="multipart/form-data">
		<div class="form-group col-md-10 offset-1">
			<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" id="nombre">
			<small id="nombre" class="form-text text-muted">Nombre del juego</small>
		</div>
		<div class="form-group col-md-10 offset-1">
			<input type="text" class="form-control" name="plataforma" id="plataforma" placeholder="Plataforma">
			<small id="nombre" class="form-text text-muted">Plataforma</small>
		</div>
		<div class="form-group col-md-10 offset-1"> 	
			<select name="categoria" class="form-control">
				{foreach from=$category_list item=categories}
					<option>{$categories->nombre_categoria}</option>
				{/foreach}
			</select>
			<small id="nombre" class="form-text text-muted">Categoría</small>	
		</div>
		<div class="form-group col-md-10 offset-1">
            <input type="file" name="game_img" id="game_img">
    	    <small id="game_img" class="form-text text-muted">Seleccione una imagen</small>
    	     <!-- //EN PHP
	        //Nombre del archivo
	        $_FILES[“input_name”][“name”]
	        //Archivo temporal creado en el server
	        $_FILES[“input_name”][“tmp_name”] -->
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
		       