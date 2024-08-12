<?php
$dt_fct=$_POST['dt_fct'];
mysql_connect("localhost","root","");
mysql_select_db("gestion facture");
echo"<center><h1><u<<font color=pink>Liste des Factures par date</font></u></center><br>
  <center><h2><font color=red><table border=2 with=100%></font<</h2></center>
<tr><td>N facture<td>N client<td>Montant <td>Date facture</tr>";
$sql="select *from facture where dt_fct ='$dt_fct'";
$tab=mysql_query($sql);
while($l=mysql_fetch_array($tab))
{
	extract($l);
	echo "<tr><td>$nf_fct<td>$ncl_clt<td>$mt_fct<td>$dt_fct</tr>";	
}
echo "</table>";
mysql_close();
?>