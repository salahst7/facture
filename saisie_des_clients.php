<html>
<head>
<title>Saisie des clients</title>
</head>
<body>
<form method=POST>
<pre>
<table border="0"align="center"cellspacing="2"cellpadding="2">
<tr align="center">
<td>N client</td>
<td><input type="text"name="ncl_clt"></td>
</tr>
<tr align="center">
<td>Nom et Prenom</td>
<td><input type="text"name="nom_clt"></td>
</tr>
<tr align="center">
<td>ville</td>
<td><input type="date_time_set"name="ville_clt"></td>
</tr>
<tr align="center">
<td colspan="2"><input type="submit" name=b1 value="Inserer"></td>
<td colspan="2"><input type="reset" name=b2 value="Autre"></td>
</tr>
</pre>
</form>
</body>
</html>
<?php
if(isset($_POST['B1']))
{
$ncl_clt=$_POST['ncl_clt'];
$nom_clt=$_POST['nom_clt'];
$ville_clt=$_POST['ville_clt'];
mysql_connect("localhost","root","");
mysql_select_db("gestion facture");
$sql="insert into client values('$ncl_clt','$nom_clt','$ville_clt')";
mysql_query($sql);
mysql_close();
}
?>
