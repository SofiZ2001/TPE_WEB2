{include file= "header.tpl"}
    <div class="weight_form_small">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Plataforma</th>
                    <th>Categoria</th>
                    <th></th>
                    <th>Acción</th>
                </tr> 
            </thead>
            <tbody>
                <!-- {foreach from=$game_details item=game}
                <tr>
                    <td>{$game->nombre}</td>
                    <td>{$game->plataforma}</td>
                    <td>{$game->categoria}</td>
                    <td><a href='delete/{$game->id_juego}'>Borrar</a></td>
                    <td><a href='update_game/{$game->id_juego}'>Editar</a></td>
                </tr> 
                {/foreach} -->
                <tr>
                    <td colspan="4"></td>
                    <td><a href='add_game'>Agregar juego</a></td>
                </tr>    
            </tbody>
        </table>
        <!-- 
        <div class="img-container">
            <div class="img-center">
                <img src="img/wow_logo.jpg" class="img-fluid img-thumbnail img-center">
            </div>
        </div> 
        <form>
            <div class="form-group">
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                <small id="nombre" class="form-text text-muted">Seleccione un archivo</small>
            </div>
        </form>
        -->
        <P>Imagen->here</P>
        {if isset($game->imagen)}
            <img src="{$game->imagen}"/>
        {/if}
        {foreach from=$game_details item=game}
        <form action="add_game_image/{$game->id_juego}" method="GET" enctype="multipart/form-data">
            <div class="form-group col-md-10 offset-1">
                <input type="hidden" name="id_juego" class="form-control" id="id_juego" placeholder="Id juego" value="{$game->id_juego}">
            </div>
            <div class="form-group col-md-10 offset-1">
                <input type="file" name="uploaded_file" id="upload_file">
                <small id="uploaded_file" class="form-text text-muted">Seleccione un archivo</small>
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
        <!-- //EN PHP
        //Nombre del archivo
        $_FILES[“input_name”][“name”]

        //Archivo temporal creado en el server
        $_FILES[“input_name”][“tmp_name”] -->

    </div>
{include file="footer.tpl"}