<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<?php

include "connect.php";

$qr="SELECT * FROM `disease_info`";
$rs=mysql_query($qr);

?>

<body>

<table align="center" border="1">
<tr>
	<th>Srno</th>
	<th>Disease Name</th>
	<th>Disease Classification</th>
	<th>Disease Description</th>
	<th>Disease Photo</th>
    <th>Disease Treatments ( medicines )</th>
    <th>Lifestyle Solutions</th>
</tr>

<?php

while($record=mysql_fetch_array($rs))
{

?>

<tr>
	<td><?php echo $record[0]?></td>
	<td><?php echo $record[1]?></td>
	<td><?php echo $record[2]?></td>
	<td><?php echo $record[3]?></td>
	<td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $record[4] ).'"/>'?></td>
	<td><?php echo $record[5]?></td>
	<td><?php echo $record[6]?></td>
</tr>

<?php
}
?>
</table>
<form name = "frm1" method ="post" action="addDisease.php" >

<button type="submit">Add Disease</button>

</form>
<center><?php echo $msg?></center>
</body>
</html>