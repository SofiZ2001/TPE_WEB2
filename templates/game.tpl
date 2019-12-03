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
                    {if ($user_permiso==1)}
                    <th></th>
                    <th>Acción</th>
                    <th></th>
                    {/if}
                </tr> 
            </thead>
            <tbody>
                {foreach from=$game_list item=game}
                    <tr>
                        <td>{$game->nombre}</td>
                        <td>{$game->plataforma}</td>
                        <td>{$game->categoria}</td>
                        {if ($user_permiso==1)}
                        <td><a href='delete/{$game->id_juego}'>Borrar</a></td>
                        <td><a href='update_game/{$game->id_juego}'>Editar</a></td>
                        {/if}
                        <td><a href='game/{$game->id_juego}'>Ver juego</a></td>
                        <td><a href='sorted_games/{$game->categoria}'>Ver juegos con esta categoria</a></td>
                    </tr> 
                {/foreach}
                    {if ($user_permiso==1)}
                    <tr>
                        <td colspan="5"></td>
                        <td><a href= 'add_game'>Agregar juego</a></td>
                    </tr>
                    {/if}   
            </tbody>
        </table>
    </div>    
{include file="footer.tpl"}
