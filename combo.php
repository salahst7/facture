<html>
<head>
<title>liste des dates</title>
</head>
<body>
<form method=POST action="liste.php"target="d">
<pre>
	<?php
mysql_connect("localhost","root","");
mysql_select_db("gestion facture");
echo"Date facture<select name=dt_fct>";
$sql="select *from facture";
$tab=mysql_query($sql);
while($l=mysql_fetch_array($tab))
{
	extract($l);
echo"<option value=$dt_fct>$dt_fct";	
}
echo "</select><br>";
mysql_close();
?>
<input type =submit name=B1 value="Lister">
</pre>
</form>
</body>
</html>