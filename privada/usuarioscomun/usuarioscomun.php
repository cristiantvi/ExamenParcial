<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");

$smarty = new Smarty;

//$db->debug=true;

contarRegistros($db,"usuarioscomun");

paginacion("usuarioscomun.php?", $smarty);

$sql3 = $db->Prepare("SELECT *
                      FROM usuarioscomun
                      WHERE estado <> '0'
                      AND CodigoUserCom > 1
                      ORDER BY CodigoUserCom DESC
                      LIMIT ? OFFSET ?
                      ");
$smarty->assign("usuarioscomun", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("usuarioscomun.tpl");
?>