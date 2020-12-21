<!DOCTYPE html>
<html>
<head>
	<title>Membership | UTS Muhammad Jaury</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body bgcolor="black">
	<div class="latar">
		<div class="headerutama">
			<div class="title-left">
				<img src="assets/img/header-logo.png">
				<a href="index.php"><h1>Republic of Gamers</h1></a> 
			</div>
			<div class="title-right">
				<img src="">
			</div>
		</div>
		<div class="headermenu">
			<a href="about.html">About</a>
			<a href="contact.html">Contact</a>
		</div>
		<div class="konten">
			<div class="kontenkiri">
				<ul>
					<li><a href="membership.php">Membership</a></li>
					<li><a href="sales/product.php">Product</a></li>
					<li><a href="sales/promo.php">Promo</a></li>
				</ul>
			</div>
			<div class="kontenkanan">
				<h3>Masukkan Data Anda:</h3>
				<table>
					<tr>
						<td>Nama Anda</td>
						<td>:</td>
						<td><input type="text" placeholder="Masukkan Nama Anda"></input> </td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td><input type="radio" value="lai-laki">Laki-laki<input type="radio" value="perempuan">Perempuan</td>
					</tr>
					<tr>
						<td>Aktifitas</td>
						<td>:</td>
						<td><input type="checkbox" value="Outdoor">Outdoor
						<input type="checkbox" value="Indoor">Indoor</td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td>
						<form id="ultah" name="ultah" method="post">
					    	<select name="hari">
					    		<option>Hari</option>
					    		<?php for ($hari=1; $hari <=31 ; $hari++) { ?>
					    			<option value="<?php echo $hari;?>">
					    				<?php echo $hari; ?>
					    			</option>
					    		<?php } ?>
					    	</select>
					    	
					    	<select name="bulan">
					    		<option>Bulan</option>
					    		<?php
					    			$namabulan=array("Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des");?>
					    			<?php for ($bulan=1; $bulan <= 12 ; $bulan++) { ?>
					    				<option value="<?php echo $bulan; ?>">
					    					<?php echo $namabulan[$bulan-1]; ?>
					    				</option>
					    				<?php } ?>
					    	</select>
					    	<select name="tahun">
					    		<option value="">Tahun</option>
					    		<?php for ($tahun=2018; $tahun >=1950; $tahun--) { ?>
					    			<option value="<?php echo $tahun; ?>">
					    				<?php echo $tahun; ?>
					    			</option>
					    		<?php } ?>
					    	</select>
					    </form>
					    </td>
					</tr>
					<tr>
						<td>Upload Foto</td>
						<td>:</td>
						<td><input type="file" value="Pilih File"></input> </td>
					</tr>
					<tr>
						<td>Komentar</td>
						<td>:</td>
						<td><textarea cols="40" rows="6"></textarea></td>
					</tr>
					<tr>
						<td><input type="submit" value="Daftar"></input><input type="reset" value="Clear"></input> </td>
					</tr>

				</table>
			</div>
		</div>
		<div class="footer">
			<p><b>Muhammad Jaury</b>&#169;2018</p>
		</div>
	</div>
</body>
</html>