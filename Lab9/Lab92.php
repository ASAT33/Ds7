<!DOCTYPE html>
<html lang="es">
<head>
<title>Document</title>
<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
</head>
<body>
    <h1>Consulta de noticias</h1>
<FORM NAME="FormFiltro" method="post" action="Lab92.php">
<br/>
Filtrar por <select name="campos">
<option value="texto" selected>Descripcion
<option value="titulo">Titulo
<option value="categoria">Categoria
</select>
con el valor
<input type="text" name="valor"/>
<input name="ConsultarFiltro" value="Filtrar Datos" type="submit" />
<input name="ConsultarTodos" value="Ver todos" type="submit" />

</FORM>


<?php
require_once("class/noticias.php");
$obj_noticia =new noticia();
$noticia =$obj_noticia->consultar_noticias();
if(array_key_exists('ConsultarTodos',$_POST)){
    $obj_noticia= new noticia();
    $noticias_new =$obj_noticia->consultar_noticias();
}
if (array_key_exists('Consultar Filtro',$_POST)){
    $obj_noticia =new noticia();
    $noticias =$obj_noticia->consultar_noticias_filtro($_REQUEST['campos'],$_REQUEST['valor']);
}
$nfilas=count($noticia);

if ($nfilas > 0){
print ("<TABLE>\n");
print ("<TR>\n");
print ("<TH>Titulo</TH>\n");
print ("<TH>Texto</TH>\n");
print ("<TH>Categoria</TH>\n"); 
print ("<TH>Fecha</TH>\n");
print ("<TH>Imagen</TH>\n");
print ("</TR>\n");

foreach ($noticia as $resultado) {
print ("<TR>\n");
print ("<TD>". $resultado ['titulo'] . "</TD>\n");
print ("<TD>". $resultado['texto']."</TD>\n");
print ("<TD>". $resultado['categoria'] . "</TD>\n"); 
print ("<TD>".date("j/n/Y", strtotime($resultado['fecha']))."</TD>\n");

if ($resultado ['imagen'] !="") { 
print ("<TD><A TARGET='_blank' HREF='img/". $resultado['imagen']."'><IMG BORDER='0' SRC='img/1conotexto.gif'></A></TD>\n");
}
else{
print ("<TD>&nbsp;</TD>\n");
}
print ("</TR>\n");
}
print ("</TABLE>\n");
}
else{
print ("No hay noticias disponibles");
}


?>
</BODY>
</HTML>