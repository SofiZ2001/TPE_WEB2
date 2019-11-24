{include file="header.tpl"}
    <div class="weight_form_small">
        <table class="table">
            <thead>
                <tr>
                    <th>Categoria</th>
                    <th>Descripcion</th>
                    {if ($user_permiso==1)}
                    <th></th>
                    <th>Acción</th>
                    {/if}
                </tr> 
            </thead>
            <tbody>
                {foreach from=$category_details item=category}
                    <tr>
                        <td>{$category->nombre_categoria}</td>
                        <td>{$category->descripcion}</td>
                        {if ($user_permiso==1)}
                        <td><a href= 'delete_category/{$category->nombre_categoria}'>Borrar</a></td>
                        <td><a href= 'update_category/{$category->nombre_categoria}'>Editar</a></td>
                        {/if}
                    </tr> 
                {/foreach}
                    {if ($user_permiso==1)}
                    <tr>
                        <td colspan="3"></td>
                        <td><a href='add_category'>Agregar categoria</a></td>
                    </tr> 
                    {/if}   
            </tbody>
        </table>
    </div>
{include file="footer.tpl"}