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
          <h1>PROYECTOS</h1>          
        </td>
        <td align="right" width="33%">
          <form name="formNuevo" method="post" action="proyectos_nuevo.php">
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
          <th>NRO</th><th>Nombre proyecto</th><th>Descripcion</th><th>Contacto</th>
          <th><img src="../../imagenes/modificar.png"></th><th><img src="../../imagenes/borrar.png"></th>
        </tr>
        {assign var="b" value="1"}
        {foreach item=r from=$proyectos}
        <tr>
          <td align="center">{$b}</td>
          <td>{$r.nombreProy}</td>
          <td>{$r.descripcionProyecto}</td>
          <td>{$r.TelefonoUCom}</td>
          <td align="center">
            <form name="formModif {$r.codigoProyectos}" method="post" action="proyectos_modificar.php">
              <input type="hidden" name="codigoProyectos" value="{$r.codigoProyectos}">
              <input type="hidden" name="CodigoUserCom" value="{$r.CodigoUserCom}">
              <a href="javascript:document.formModif {$r.codigoProyectos}.submit(); " title="Modificar proyectos">
                Modificar>>
              </a>
            </form>
          </td>
          <td align="center">
            <form name="formElimi {$r.codigoProyectos}" method="post" action="proyectos_eliminar.php">
              <input type="hidden" name="codigoProyectos" value="{$r.codigoProyectos}">
              <a href="javascript:document.formElimi {$r.codigoProyectos}.submit(); " title="Eliminar proyecto" onclick='javascript: return(confirm("Desea realmente Eliminar al proyecto ::: {$r.codigoProyectos}?"));'>
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