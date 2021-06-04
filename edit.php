<?php
include 'database.php';
$db = new database();
?>

<h1>CRUD OOP PHP</h1>
<h2>YOUTHNIME.ID</h2>
<h3>Data User</h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
<table>
	<tr>
		<td>ID</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>
			<input type="text" name="alamat" value="<?php echo $d['alamat'] ?>">
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="simpan"></td>
	</tr>
</table>
	<?php
	}
?>
</form>