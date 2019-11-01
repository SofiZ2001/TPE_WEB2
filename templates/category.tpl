{include file="header.tpl"}
    <div class="separation">
    </div>
    <div class="weight_form_small">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Categoria</th>
                    <th>Descripcion</th>
                    <th></th>
                    <th></th>
                    <th>Acción</th>
                </tr> 
            </thead>
            <tbody>
                {foreach from=$category_list item=category}
                    <tr>
                        <td>{$category->nombre_categoria}</td>
                        <td>{$category->descripcion}</td>
                        <td><a href= 'category/{$category->nombre_categoria}'>Ver categoria de juego</a> </td>
                        <td><a href= 'delete_category/{$category->nombre_categoria}'>Borrar</a> </td>
                        <td><a href='update_category/{$category->nombre_categoria}'>Editar</a></td>
                    </tr> 
                {/foreach}
                    <tr>
                        <td colspan="4"></td>
                        <td><a href='add_category'>Agregar categoria</a></td>
                    </tr>    
            </tbody>
        </table>
    </div>
    <div class="fond"></div>
{include file="footer.tpl"}