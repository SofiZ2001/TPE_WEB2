{include file= "header.tpl"}
    <div class="separation">
    </div>
    <div class="weight_form_small">
        <table class= "table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Plataforma</th>
                    <th>Categoria</th>
                    <th></th>
                    <th>Acción</th>
                    <th></th>
                </tr> 
            </thead>
            <tbody>
                {foreach from=$game_list item=game}
                    <tr>
                        <td>{$game->nombre}</td>
                        <td>{$game->plataforma}</td>
                        <td>{$game->categoria}</td>
                        <td><a href='delete/{$game->id_juego}'>Borrar</a></td>
                        <td><a href='update_game/{$game->id_juego}'>Editar</a></td>
                        <td><a href='game/{$game->id_juego}'>Ver juego</a></td>
                        <td><a href='sorted_games/{$game->categoria}'>Ver juegos con esta categoria</a></td>
                    </tr> 
                {/foreach}
                    <tr>
                        <td colspan="6"></td>
                        <td><a href= 'add_game'>Agregar juego</a></td>
                    </tr>    
            </tbody>
        </table>
    </div>    
{include file="footer.tpl"}
