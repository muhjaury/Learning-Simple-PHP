<!DOCTYPE html>
<html>
<head>
	<title>UTS Muhammad Jaury</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body bgcolor="black">
	<div class="latar">
		<div class="headerutama">
			<div class="title-left">
				<img src="assets/img/header-logo.png" alt="ROG Logo">
				<a href="index.php"><h1>Republic of Gamers</h1></a> 
			</div>
			<div class="title-right">
				<img src="">
			</div>
		</div>
		<div class="headermenu">
			<a href="about.html">About</a>
			<a href="contact.html">Contact</a>
			<?php
          $bulan = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
          $tanggal = date("d");
          $bulan = $bulan[date("m")-1];
          $tahun = date("Y");

          echo "<a style='padding:15px;'>".$tanggal." ".$bulan." ".$tahun."</a>" ;
        ?>
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
				<img src="assets/img/kom.png" height="250px" width="250px" align="right">
				<h3>Automated intelligence optimizes performance</h1>
				<p align="justify">The latest generation starts with a trio of unlocked processors ripe for overclocking, and our motherboards have learned new tricks for tapping into their potential. AI Overclocking makes automatic tuning faster and smarter than ever before. Available in Windows or directly through the UEFI, it profiles the CPU and cooling to predict the optimal configuration for each individual system. We created a proprietary algorithm that rates the quality of the silicon to see where your chip lands on the spectrum. The onboard intelligence also watches system vitals like temperatures, fan speeds, and power draw to evaluate cooling performance. Dedicated hardware makes the monitoring seamless, and you can allow continuous training that adapts to upgrades, dust buildup over time, and seasonal changes in ambient temperature. There’s even an adjustable optimism scale that helps to compensate for small variations between chips with the same silicon quality.</p>
				<p align="justify">AI Overclocking isn’t the only automated solution. Our newest 5-Way Optimization software offers an alternate approach to one-click tuning that simulates a human overclocker by increasing clock speeds, tweaking voltages, and testing stability before pursuing higher frequencies. This technique gets the CPU extremely close to the maximum speed that can be attained with manual tuning, and connected fans can also be calibrated as part of the process. AI Overclocking and 5-Way Optimization are available on all ROG Z390 motherboards except the Strix Z390-H Gaming, which uses predefined profiles to hit higher speeds at the touch of a button. Auto-tuners are perfect for fresh recruits who are new to overclocking, and they provide experts an easy way to quickly assess a system before proceeding with manual tuning.</p>
			</div>
		</div>
		<div class="footer">
			<p><b>Muhammad Jaury</b>&#169;2018</p>
		</div>
	</div>
</body>
</html>