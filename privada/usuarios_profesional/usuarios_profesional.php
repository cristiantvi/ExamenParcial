<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");

$smarty = new Smarty;

//$db->debug=true;

contarRegistros($db,"usuarios_profesional");

paginacion("usuarios_profesional.php?", $smarty);

$sql3 = $db->Prepare("SELECT *
                      FROM usuarios_profesional
                      WHERE estado <> '0'
                      AND CodigoUserProf > 1
                      ORDER BY CodigoUserProf DESC
                      LIMIT ? OFFSET ?
                      ");
$smarty->assign("usuarios_profesional", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("usuarios_profesional.tpl");
?>