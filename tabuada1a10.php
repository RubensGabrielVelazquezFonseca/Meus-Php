<!DOCTYPE html>
<html>
<head>
	<title>Tabela de tabuada</title>
</head>
<body>
<h1>Tabuada</h1>
<?php $numero = array(1,2,3,4,5,6,7,8,9,10);?>
<?php $total = count($numero);?>
<table border="1" width="500">
	<?php foreach($numero as $numero):?>
		<tr>
			<?php for($i = 1;$i<=$total;$i++ ):?>
				<td><?php echo $i * $numero;?></td>
			<?php endfor;?>
		</tr>
	<?php endforeach;?>
</table>

</body>
</html>
