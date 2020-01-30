<!DOCTYPE html>
<html>
<head>
	<title>Daftar Santri</title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>Nama</th>
			<th>NIS</th>
			<th>Jurusan</th>
		</tr>
		<?php foreach ($santri as $str):?>
			<tr>
				<td><?php echo $str["nama"] ?></td>
				<td><?php echo $str["nis"] ?></td>
				<td><?php echo $str["jurusan"] ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>