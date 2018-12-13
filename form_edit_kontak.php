<!DOCTYPE html>
<html>
<head>
	<title>Edit Kontak</title>
</head>
<body align="center">
	<?php 
		require_once 'connection.php';
		$id_kontak = $_GET['idKontak'];

		$kontak = new kontak();
		$kontak->connect(); 
		$kontak->detailDataKontak($id_kontak);

		$dataKontak = $kontak->get_dataset();

	 ?>
	<form action="edit_kontak.php?idKontak=<?php echo $id_kontak; ?>" method="post">
		<h2>FORM EDIT KONTAK</h2>
		<table align="center">
			<tr>
				<th>Nama</th>
				<td><input type="text" name="nama" value="<?php echo $dataKontak[0][1];?>" required=""></td>
			</tr>
			<tr>
				<th>Kontak</th>
				<td><input type="number" name="kontak" value="<?php echo $dataKontak[0][2];?>" required=""></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="email" value="<?php echo $dataKontak[0][3];?>" required=""></td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<button type="submit" name="insert">Ubah</button>
				</td>
			</tr>
		</table>
	</form>
	<nav>
		<p>&copy;Ryfazrin - 2018</p>
		<p>Created by : Muhammad Pazrin andreanor</p>
	</nav>
</body>
</html>