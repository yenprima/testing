<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<h1> Data Tanaman </h1>
		<hr>
		<?= $daftar_tanaman->num_rows() ?>
		<ul>
			<?php foreach($daftar_tanaman->result() as $row) { ?>
				<li><?= $row->nama; ?></li>
			<?php } ?>
		</ul>
	</body>
</html>