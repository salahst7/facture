<?php
mysql_connect("localhost","root","");
mysql_select_db("gestion facture");
echo"<center><h1><u<<font color=pink>Liste des Factures</font></u></center><br>
  <center><h2><font color=red><table border=2 with=100%></font<</h2></center>
<tr><td>N facture<td>N client<td>Montant <td>Date facture</tr>";
$sql="select *from client,facture where client.ncl_clt=facture.ncl_clt ";
$tab=mysql_query($sql);
while($l=mysql_fetch_array($tab))
{
	extract($l);
echo "<tr><td>$nf_fct<td>$ncl_clt<td>$mt_fct<td>$dt_fct</tr>";	
}
echo "</table>";
mysql_close();
?>