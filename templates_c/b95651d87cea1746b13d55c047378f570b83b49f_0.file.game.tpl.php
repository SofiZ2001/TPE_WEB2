<?php
/* Smarty version 3.1.33, created on 2019-11-22 15:59:57
  from 'E:\xampp\htdocs\TPE_WEB2\templates\game.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd7f7ed9d3e34_04813017',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b95651d87cea1746b13d55c047378f570b83b49f' => 
    array (
      0 => 'E:\\xampp\\htdocs\\TPE_WEB2\\templates\\game.tpl',
      1 => 1574434792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dd7f7ed9d3e34_04813017 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['game_list']->value, 'game');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['game']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['game']->value->nombre;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['game']->value->plataforma;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['game']->value->categoria;?>
</td>
                        <td><a href='delete/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
'>Borrar</a></td>
                        <td><a href='update_game/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
'>Editar</a></td>
                        <td><a href='game/<?php echo $_smarty_tpl->tpl_vars['game']->value->id_juego;?>
'>Ver juego</a></td>
                        <td><a href='sorted_games/<?php echo $_smarty_tpl->tpl_vars['game']->value->categoria;?>
'>Ver juegos con esta categoria</a></td>
                    </tr> 
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <tr>
                        <td colspan="6"></td>
                        <td><a href= 'add_game'>Agregar juego</a></td>
                    </tr>    
            </tbody>
        </table>
    </div>    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
