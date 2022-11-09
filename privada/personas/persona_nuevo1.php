<?php
session_start();

require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");

$ci = $_POST["ci"];
$nombres = $_POST["nombres"];
$ap = $_POST["ap"];
$am = $_POST["am"];
$telef = $_POST["telef"];
$direccion = $_POST["direccion"];


//$db->debug=true;

$smarty = new Smarty;

$reg = array();
$reg["CodigoEmpresa"] = 1;
$reg["ci"] = $ci;
$reg["nombres"] = $nombres;
$reg["ap"] = $ap;
$reg["am"] = $am;
$reg["telef"] = $telef;
$reg["direccion"] = $direccion;
$reg["fec_insercion"] = date("Y-m-d H:i:s");
$reg["usuario"] = $_SESSION["sesion_id_usuario"];
$reg["estado"] = '1';
$rs1 = $db->AutoExecute("personas", $reg, "INSERT");

if ($rs1){
	header("Location: personas.php");
	exit();
}else{
	$smarty->assing("mensaje", "ERROR: Los datos no se insertaron!!!!!!!");
	$smarty->assign("direc_css",$direc_css);
	$smarty->display("persona_nuevo1.tpl");
}
?>