<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


//$db->debug=true;

$sql = $db->Prepare("SELECT *
                    FROM profesiones p, usuarios_profesional u
                    WHERE p.CodigoUserProf = u.CodigoUserProf
                    AND p.estado <> '0'
                    AND u.estado <> '0'
                    ORDER BY p.codigoProf DESC
                    ");
$rs = $db->GetAll($sql);

$smarty->assign("profesiones", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("profesiones.tpl");
?>