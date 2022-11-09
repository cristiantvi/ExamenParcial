<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../paginacion.inc.php");

$smarty = new Smarty;

//$db->debug=true;

contarRegistros($db,"usuarios_juridico");

paginacion("usuarios_juridico.php?", $smarty);

$sql3 = $db->Prepare("SELECT *
                      FROM usuarios_juridico
                      WHERE estado <> '0'
                      AND CodigoUserEmp > 1
                      ORDER BY CodigoUserEmp DESC
                      LIMIT ? OFFSET ?
                      ");
$smarty->assign("usuarios_juridico", $db->GetAll($sql3, array($nElem, $regIni)));


$smarty->assign("direc_css", $direc_css);
$smarty->display("usuarios_juridico.tpl");
?>