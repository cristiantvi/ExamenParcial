<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../{$direc_css}" type="text/css">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">

  </head>
  <body>
    <table width="100%" border="0">
      <tr>
        <td width="33%">
          <table border="0">
            <tr>
            </tr>            
          </table>
        </td>
        <td align="center" width="33%">
          <h1>PROFESIONES</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="profesiones_nuevo.php">
            <a href="javascript:document.formNuevo.submit();">
              Nuevo>>>
            </a>            
          </form>          
        </td>
      </tr>      
    </table>

    <center>
      <table class="listado">
        <tr>
          <th>NRO</th><th>Profesion</th><th>Nombre</th><th>Contacto</th>
          <th><img src="../../imagenes/modificar.png"></th><th><img src="../../imagenes/borrar.png"></th>
        </tr>
        {assign var="b" value="1"}
        {foreach item=r from=$profesiones}
        <tr>
          <td align="center">{$b}</td>
          <td>{$r.NombreProf}</td>
          <td>{$r.NombresUProf} {$r.ApellidoUProf}</td>
          <td>{$r.CiUProf}</td>
          <td align="center">
            <form name="formModif {$r.CodigoProf}" method="post" action="profesiones_modificar.php">
              <input type="hidden" name="CodigoProf" value="{$r.CodigoProf}">
              <input type="hidden" name="CodigoUserProf" value="{$r.CodigoUserProf}">
              <a href="javascript:document.formModif {$r.CodigoProf}.submit(); " title="Modificar profesiones">
                Modificar>>
              </a>
            </form>
          </td>
          <td align="center">
            <form name="formElimi {$r.CodigoProf}" method="post" action="profesiones_eliminar.php">
              <input type="hidden" name="CodigoProf" value="{$r.CodigoProf}">
              <a href="javascript:document.formElimi {$r.CodigoProf}.submit(); " title="Eliminar profesiones" onclick='javascript: return(confirm("Desea realmente Eliminar la profesiones ::: {$r.CodigoProf}?"));'>
                Eliminar>>
              </a>
            </form>
          </td>
          {assign var="b" value="`$b+1`"}
          {/foreach}
        </tr>
      </table>
    </center>

  </body>
</html>