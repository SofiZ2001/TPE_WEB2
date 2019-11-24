{include file= "header.tpl"}
    <div class="weight_form_small">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Plataforma</th>
                    <th>Categoria</th>
                    {if ($user_permiso==1)}
                    <th></th>
                    <th>Acción</th>
                    {/if}
                </tr> 
            </thead>
            <tbody>
                {foreach from=$game_details item=game}
                <tr>
                    <td>{$game->nombre}</td>
                    <td>{$game->plataforma}</td>
                    <td>{$game->categoria}</td>
                    {if ($user_permiso==1)}
                    <td><a href='delete/{$game->id_juego}'>Borrar</a></td>
                    <td><a href='update_game/{$game->id_juego}'>Editar</a></td>
                    {/if}
                </tr> 
                {/foreach}
                {if ($user_permiso==1)}
                <tr>
                    <td colspan="4"></td>
                    <td><a href='add_game'>Agregar juego</a></td>
                </tr>
                {/if}   
            </tbody>
        </table>
        <div class="img-container-add-game">
            <div class="img-center">
                {if isset($game->imagen)}
                    <img src="{$game->imagen}" class="img-fluid img-thumbnail img-center"/>
                {/if}     
            </div>
        </div>
    </div>
{include file="footer.tpl"}