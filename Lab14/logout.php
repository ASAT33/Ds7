<?PHP
session_start();
?>
<HTML LANG="es">
<HEAD>
<TITLE>Desconectar</TITLE>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</HEAD>
<BODY>
<?PHP
if (isset($_SESSION["usuario_valido"]))
{
session_destroy ();
print ("<BR><BR><P ALIGN='CENTER'>Conexion finalizada</P>\n");
print ("<P ALIGN='CENTER'>[ <A HREF='login.php'>Conectar</A> ]</P>\n");
}
else
{
print ("<BR><BR>\n");
print("<P ALIGN='CENTER'>No existe una conexion activa</p>\n");
print
("<P ALIGN='CENTER'>[ <A HREF='login.php'>Conectar</A> </P>\n");

}
?>
</BODY>
</html>
