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
          <form name="formNuevo" method="post" action="requerimientos_de_personal.php">
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
        {foreach item=r from=$requerimientos_de_personal}
        <tr>
          <td align="center">{$b}</td>
          <td>{$r.DescripcionReq}</td>
          <td>{$r.FechaReq} {$r.Categoria}</td>
          <td>{$r.NombreUEmp}</td>
          <td align="center">
            <form name="formModif {$r.CodigoReq}" method="post" action="profesiones_modificar.php">
              <input type="hidden" name="CodigoReq" value="{$r.CodigoReq}">
              <input type="hidden" name="CodigoUserEmp" value="{$r.CodigoUserEmp}">
              <a href="javascript:document.formModif {$r.CodigoReq}.submit(); " title="Modificar profesiones">
                Modificar>>
              </a>
            </form>
          </td>
          <td align="center">
            <form name="formElimi {$r.CodigoReq}" method="post" action="profesiones_eliminar.php">
              <input type="hidden" name="CodigoReq" value="{$r.CodigoReq}">
              <a href="javascript:document.formElimi {$r.CodigoReq}.submit(); " title="Eliminar profesiones" onclick='javascript: return(confirm("Desea realmente Eliminar la profesiones ::: {$r.CodigoReq}?"));'>
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