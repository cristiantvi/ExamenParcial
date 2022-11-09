<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


//$db->debug=true;

$sql = $db->Prepare("SELECT *
                    FROM requerimientos_de_personal p, usuarios_juridico u
                    WHERE p.CodigoUserEmp = u.CodigoUserEmp
                    AND p.estado <> '0'
                    AND u.estado <> '0'
                    ORDER BY p.CodigoUserEmp DESC
                    ");
$rs = $db->GetAll($sql);

$smarty->assign("requerimientos_de_personal", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("requerimientos_de_personal.tpl");
?>