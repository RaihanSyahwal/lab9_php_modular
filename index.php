<?php
include("koneksi.php");
$no = 1;
// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);

?>
<header>
<?php require('header.php'); ?>
<style>
form div > label {
			display: inline-block;
			width: 100px;
			height: 30px;
}
</style>
</header>
<section id="hero">
<div class="container">
        <h1 align="center">Data Barang</h1>
		<table class="table table-striped table-sm">
			<td><td>
		</table>
        <div class="main">
			<div class="table-responsive">
				<table class="table table-striped table-hover">
				<thead>
				<table border="1">
					<tr>
						<th>No</th>
						<th>Gambar</th>
						<th>Nama Barang</th>
						<th>Katagori</th>
						<th>Harga Jual</th>
						<th>Harga Beli</th>
						<th>Stok</th>
						<th>Aksi</th>
					</tr>
					<?php if($result): ?>
					<?php while($row = mysqli_fetch_array($result)): ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td ><img src="gambar/<?= $row['gambar'];?>" alt="<?=$row['nama'];?>"></td>
						<td><?= $row['nama'];?></td>
						<td><?= $row['kategori'];?></td>
						<td><?= $row['harga_jual'];?></td>
						<td><?= $row['harga_beli'];?></td>
						<td><?= $row['stok'];?></td>
						<td>
						<a class="btn btn-success" href="ubah.php?id=<?= $row['id_barang'];?>" role="button">Ubah</a>
						<a class="btn btn-danger" href="hapus.php?id=<?= $row['id_barang'];?>" role="button">Hapus</a>
					</td>
					</tr>
					<?php endwhile; else: ?>
					<tr>
						<td colspan="7">Belum ada data</td>
					</tr>
					<?php endif; ?>
				</thead>
            </table>
        </div>
    </div>
</div>
</section>
<footer>
<?php require('footer.php'); ?>
</footer>
    <div id="container">

    </div>
</body>
</html>