{include file="header.tpl"}

            <ul id="games">

            </ul>

            <!-- <form id="form-games" action="save_game" method="post">
                <input type="text" name="titulo" placeholder="Titulo">
                <input type="text" name="descripcion" placeholder="Descripcion">
                <input type="number" name="prioridad"  max="10">
                <input type="checkbox" name="finalizada" id="finalizada">
                <input type="submit" value="Insertar">
            </form> -->
            <form action="save_game" id="form-games" method="POST" enctype="multipart/form-data">
                <div class="form-group col-md-10 offset-1">
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" id="nombre">
                    <small id="nombre" class="form-text text-muted">Nombre del juego</small>
                </div>
                <div class="form-group col-md-10 offset-1">
                    <input type="text" class="form-control" name="plataforma" id="plataforma" placeholder="Plataforma">
                    <small id="nombre" class="form-text text-muted">Plataforma</small>
                </div>
                <!-- <div class="form-group col-md-10 offset-1">     
                    <select name="categoria" class="form-control">
                        {foreach from=$category_list item=categories}
                            <option>{$categories->nombre_categoria}</option>
                        {/foreach}
                    </select>
                    <small id="nombre" class="form-text text-muted">Categoría</small>   
                </div> -->
                <div class="form-group col-md-10 offset-1">
                    <input type="file" name="game_img" id="game_img">
                    <small id="game_img" class="form-text text-muted">Seleccione una imagen</small>
                </div>  
                <div class="d-flex flex-column">
                    <div class="p-2 col-md-6 offset-3">
                        <input type="submit" name="save" value="Agregar" class="btn btn-primary form-group col-md-12">
                    </div>
                    <!-- <div class="p-2 col-md-6 offset-3">
                        <input type="submit" name="cancel" value="Cancelar" class="btn btn-primary form-group col-md-12">
                    </div> -->
                </div>  
            </form>
        <script src="./js/juegos.js"></script>
    </body>
</html>
