<?php

require 'database1.php';

$pdostatement=$pdo->prepare("SELECT * FROM `XARIDOR` ORDER BY `ID` DESC");
$pdostatement->execute();
$xaridorlar=$pdostatement->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<title>xaridorlar.php</title>
	<link rel="stylesheet" type="text/css" href="xaridorlar.css">
</head>
<body>
  <div class="container">
  	<table align="center">
  		<tr class="tr1">
  			<td class="td1">Ismi</td>
  			<td class="td1">Email</td>
  			<td class="td1">Kiritgan kodi</td>
  		</tr>
  		<?php foreach ($xaridorlar as $value): ?>
  		<tr class="tr1">
  			<td class="td1"><?php print $value['name'] ?></td>
  			<td class="td1"><?php print $value['email'] ?></td>
  			<td class="td1"><?php print $value['cod']; ?></td>
  		</tr>
  		<?php endforeach; ?>
  	</table>
  	
  </div>
</body>
</html>