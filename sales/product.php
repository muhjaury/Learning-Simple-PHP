<!DOCTYPE html>
<html>
<head>
	<title>Contact | UTS Muhammad Jaury</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<style>
		table {
			width: 70%;
			border-collapse: collapse;
		}

		table, th, td {
			border: 1px solid black;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="latar">
		<div class="headerutama">
			<div class="title-left">
				<img src="../assets/img/header-logo.png">
				<a href="../index.php"><h1>Republic of Gamers</h1></a> 
			</div>
			<div class="title-right">
				<img src="">
			</div>
		</div>
		<div class="headermenu">
			<a href="../about.html">About</a>
			<a href="../contact.html">Contact</a>
		</div>
		<div class="konten">
			<div class="kontenkiri">
				<ul>
					<li><a href="../membership.php">Membership</a></li>
					<li><a href="product.php">Product</a></li>
					<li><a href="promo.php">Promo</a></li>
				</ul>
			</div>
			<div class="kontenkanan">
				<h3>Daftar Produk</h3>
				<table>
					<tr>
						<th>Nama</th> 
						<th>Harga</th>
						<th>Stok</th>
					</tr>
					<?php
						$servername = "localhost";
						$username = "ary";
						$password = "ary";
						$dbname = "sertifikasi_web";

						$conn = new mysqli($servername, $username, $password, $dbname);

						$sql = "SELECT nama,harga,qty FROM produk";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo "
							<tr>
								<td>".$row['nama']."</td>
								<td>Rp.".$row['harga'].",-</td>
								<td>".$row['qty']."</td>
							</tr>
							";
						}
						} else {
						echo "0 results";
						}
						$conn->close();
					?>
				</table>
			</div>
		</div>
		<div class="footer">
			<p><b>Muhammad Jaury</b>&#169;2018</p>
		</div>
	</div>
</body>
</html>