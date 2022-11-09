<?php
/* Smarty version 3.1.36, created on 2022-05-23 02:25:13
  from 'C:\wamp64\www\Sis_Asistencia\privada\usuarios\templates\usuario_nuevo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_628af089c55a82_60721841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdcc8845e9111aeaba1ac02d20bfba1574696b2d' => 
    array (
      0 => 'C:\\wamp64\\www\\Sis_Asistencia\\privada\\usuarios\\templates\\usuario_nuevo.tpl',
      1 => 1653272669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628af089c55a82_60721841 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
">
	<?php echo '<script'; ?>
 type="text/javascript" src="../js/expresiones_regulares.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/validar_usuario.js"><?php echo '</script'; ?>
>
</head>
<body>

	<div class="formu_ingreso_datos">
		<form action="usuario_nuevo1.php" method="post" name="formu">
			<h2>REGISTRAR USUARIO</h2>
			<b>Persona (*)</b>
			<select name="id_persona">
				<option value="">selecione</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['personas']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['id_persona'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['am'];?>
--<?php echo $_smarty_tpl->tpl_vars['r']->value['ap'];?>
--<?php echo $_smarty_tpl->tpl_vars['r']->value['nombres'];?>
</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
			<p>
				<input type="text" name="usuario" size="15" placeholder="Usuario"> (*)
			</p>
			<p>
				<input type="password" name="clave" size="15" placeholder="Clave"> (*)
			</p>
			<p>
				
				<input type="button" name="Aceptar" onclick="validar();" class="boton2">
				<input type="button" name="Cancelar" onclick="javascript:location.href='usuarios.php';" class="boton2">

			</p>
			<p><b>(*) Campos Obligatorios</b></p>
		</form>
	</div>
</body>
</html><?php }
}
