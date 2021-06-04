<?php
	include 'database.php';
	$db = new database();
?>
<h1>Data Mahasiswa</h1>
<a href="input.php">input data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Usia</th>
		<th>opsi</th>
	</tr>
	<?php
		foreach ($db -> tampil_data() as $x) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $x['id']; ?></td>
				<td><?php echo $x['nama']; ?></td>
				<td><?php echo $x['alamat']; ?></td>
				<td><?php echo $x['usia']; ?></td>
				<td>
					<a href="edit.php?id = <?php echo $x['id']; ?>&aksi = edit">Edit</a>
					<a href="proses.php?id = <?php echo $x['id']; ?>&aksi = hapus">Hapus</a>
				</td>
			</tr>
			<?php
		}
	?>
</table>