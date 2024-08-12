<html>
<head>
<title>Saisie des factures</title>
</head>
<body>
<form method=POST>

<form method=POST>
<table border="0"align="center"cellspacing="2"cellpadding="2">
<tr align="center">
<td>N facture</td>
<td><input type="text"name="nf_fct"></td>
</tr>
<tr align="center">
<td>N client</td>
<td><select name="ncl_clt"   
<?php
mysql_connect("localhost","root","");
mysql_select_db("gestion facture");
echo"N client<select name=ncl_clt>";
$sql="select *from client";
$tab=mysql_query($sql);
while($l=mysql_fetch_array($tab))
{
	extract($l);
echo"<option value=$ncl_clt>$ncl_clt";	
}
echo "</select><br>";
mysql_close();
?>
</td>
</tr>
<tr align="center">
<td>Monatnt</td>
<td><input type="text"name="mt_fct"></td>
</tr>

<tr align="center">
<td>Date Facture</td>
<td><input type="date_time_set"name="dt_fct"></td>
</tr>

<tr align="center">
<td colspan="2"><input type="submit" name=b1 value="Inserer"></td>
<td colspan="2"><input type="reset" name=b2 value="Autre"></td>
</tr>
</table>

</form>
</body>
</html>
<?php
if(isset($_POST['B1']))
{
$nf_fct=$_POST['nf_fct'];    
$ncl_clt=$_POST['ncl_clt'];
$mt_fct=$_POST['mt_fct'];
$dt_fct=$_POST['dt_fct'];
mysql_connect("localhost","root","");
mysql_select_db("gestion facture");
$sql="insert into facture values('$nf_fct','$ncl_clt','$mt_fct','$dt_fct')";
mysql_query($sql);
mysql_close();
}
?>