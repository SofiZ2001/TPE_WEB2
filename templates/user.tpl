{include file= "header.tpl"}
    <div class="separation">
    </div>
    <div class="weight_form_small">
        <table class= "table table-striped">
            <thead>
                <tr>
                    <th>Email</th>
                    <th>Acción usuario</th>
                    <th>Permisos</th>
                </tr> 
            </thead>
            <tbody>
                {foreach from=$user_list item=user}
                    <tr>
                        <td>{$user->email}</td>
                        <td><a href='delete/{$user->email}'>Borrar</a></td>
                        <td><a href='update_user/{$user->email}'>Editar</a></td>
                    </tr> 
                {/foreach}   
            </tbody>
        </table>
    </div>    
{include file="footer.tpl"}

