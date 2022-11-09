<?php
/* Smarty version 3.1.36, created on 2022-05-23 02:08:32
  from 'C:\wamp64\www\Sis_Asistencia\privada\templates\menu_sup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_628aeca09be704_50543486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff2a98075a4e8c668a6e4f4d863c5bd0a088709a' => 
    array (
      0 => 'C:\\wamp64\\www\\Sis_Asistencia\\privada\\templates\\menu_sup.tpl',
      1 => 1649545459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628aeca09be704_50543486 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
</head>
<body>
	<div class="cabecera">
		<img src="/Sis_Asistencia/imagenes/<?php echo $_smarty_tpl->tpl_vars['Logo']->value;?>
" width="10%">
		<div class="titulo">
			Asistencia Profesional Web "<?php echo $_smarty_tpl->tpl_vars['NombreEmpresa']->value;?>
"
		</div>
		<div class="usuario">
			Usuario:<b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['usuario'];?>
</b>
			Rol: <b><?php echo $_smarty_tpl->tpl_vars['sesion']->value['rol'];?>
</b>
		</div>
	</div>
</body>
</html><?php }
}
