<?php
/* Smarty version 3.1.33, created on 2019-11-21 03:08:16
  from 'E:\xampp\htdocs\TPE_WEB2\templates\game_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd5f1907dbaf6_43336951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8767729651fcc19ccf663f2ce21338908d121971' => 
    array (
      0 => 'E:\\xampp\\htdocs\\TPE_WEB2\\templates\\game_details.tpl',
      1 => 1574302091,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5dd5f1907dbaf6_43336951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['game_details']->value, 'game');
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
                </tr> 
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
        <?php if (isset($_smarty_tpl->tpl_vars['game']->value->imagen)) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['game']->value->imagen;?>
"/>
        <?php }?>

        <form action="nueva" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12">
                <label>Descripcion</label>
                <textarea name="descripcion" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <input type="file" name="input_name">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>



        //EN PHP
        //Nombre del archivo
        $_FILES[“input_name”][“name”]

        //Archivo temporal creado en el server
        $_FILES[“input_name”][“tmp_name”]













    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
