<?php
session_start(); 
require_once("../../smarty/libs/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;


//$db->debug=true;

$sql = $db->Prepare("SELECT *
                    FROM proyectos p, usuariosComun u
                    WHERE p.CodigoUserCom = u.CodigoUserCom
                    AND p.estado <> '0'
                    AND u.estado <> '0'
                    ORDER BY p.codigoProyectos DESC
                    ");
$rs = $db->GetAll($sql);

$smarty->assign("proyectos", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("proyectos.tpl");
?>