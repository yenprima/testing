<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<h1> Tambah Data </h1>
		<hr>
		
		<form method='post'>
			Nama Tanaman <input type='text' name='nama'/> <br />
			Tanggal Ditanam <input type='Date' name='tanggal_tanam'/> <br />
			
			<input type='submit' name='submit' value='Tambah Data' />
		</form>
		
	</body>
</html>