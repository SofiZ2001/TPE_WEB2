<?php
/* Smarty version 3.1.33, created on 2019-10-15 02:36:13
  from 'C:\xampp\htdocs\Tpe_WEBII\templates\actores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da5147dc04157_08793289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd10b443af0c7840438f42bd819a0b16b380bd4fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe_WEBII\\templates\\actores.tpl',
      1 => 1571099764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5da5147dc04157_08793289 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Actores</title>
</head>
<body id="favoritos">
   <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <div>
            <h3>Durante Junio el género destacado es: <span id="txtDestacado">Romance</span></h3>
        </div>
        <input id="buscar" class="form-control" type="text" placeholder="Buscar" />
        <table id="datos" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Dorama</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Genero</th>
                </tr>
            </thead>
            <tbody id="cuerpoTabla">
            </tbody>
        </table>
        <form>
            <div class="form-group">
                <h4>Ingresa tu <strong>Dorama favorito</strong>  para que todos puedan conocerlo!!!</h4>
            </div>
            <div class="form-group">
                <input type="text" id="dorama" class="miDorama form-control" id="formGroupExampleInput" placeholder="Dorama">
            </div>
            <div class="form-group">
                <input type="text" id="usuario" class="miDorama form-control" id="formGroupExampleInput2" placeholder="Usuario">
            </div>
            <div class="form-group">
                <div class="form-group">
                    <select id="genero" class="miDorama form-control">
                        <option disabled selected>Género...</option>
                        <option value="Acciòn y Aventura">Acciòn y Aventura</option>
                        <option value="Comedia">Comedia</option>
                        <option value="Històrico">Històrico</option>
                        <option value="Drama">Drama</option>
                        <option value="Romance">Romance</option>
                    <option value="Fantasìa">Fantasìa</option>
                    </select>
                </div>
            </div> 
        </form>
        <button type="button" id="cargar" class="btn btn-outline-primary">Cargar</button>
        <button type="button" id="cargar3" class="btn btn-outline-secondary">Cargar 3</button>
        <button type="button" id="borrar" class="btn btn-outline-success">Borrar</button>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
