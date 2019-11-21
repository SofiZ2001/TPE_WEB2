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
                {foreach from=$game_details item=game}
                <tr>
                    <td>{$game->nombre}</td>
                    <td>{$game->plataforma}</td>
                    <td>{$game->categoria}</td>
                    <td><a href='delete/{$game->id_juego}'>Borrar</a></td>
                    <td><a href='update_game/{$game->id_juego}'>Editar</a></td>
                </tr> 
                {/foreach}
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
        {if isset($game->imagen)}
            <img src="{$game->imagen}"/>
        {/if}

        <form action="add_img" method="POST" enctype="multipart/form-data">
            <!-- <div class="row">
                <div class="col-12">
                <label>Descripcion</label>
                <textarea name="descripcion" class="form-control" rows="3"></textarea>
            </div> -->
            <div class="form-group">
                <input type="file" name="uploaded_file">
            </div>
            <input type="submit" class="btn btn-primary" value="save">Guardar</input>
        </form>



        <!-- //EN PHP
        //Nombre del archivo
        $_FILES[“input_name”][“name”]

        //Archivo temporal creado en el server
        $_FILES[“input_name”][“tmp_name”] -->













    </div>
{include file="footer.tpl"}