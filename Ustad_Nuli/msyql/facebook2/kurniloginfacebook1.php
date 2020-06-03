<html>
	<head>
	 <meta charset="utf-8">
	<title>login FB</title>
		<link rel="stylesheet" type="text/css" href="facebook.css">
		<style type = "text/css">

		</style>
	</head>
	<body>
		<div id="container">
			<div id="header" >
				<div class="wrapper" >
					<img src="fb.png"></img>	
					<form action="proses_tambah.php" method="POST">
						<table id="login">
							<tr id="kata">
								<td><label for="telepon">Email atau Telepon</label></td>
								<td width="15px"></td>
								<td><label for="sandi">Kata Sandi</label></td></td>
								<td width="15px"></td>
							</tr>
							<tr id="form">
								<td><input type="text" name="email_telepon" id="telepon" maxlength="50" required></td>
								<td></td>
								<td><input type="password" name="password" id="sandi" maxlength="30" required></td>
								<td></td>
								<td id="submit"><input type="submit" value="Masuk"></td>
							</tr>
							<tr id="lupa">
								<td></td>
								<td></td>
								<td><a href="lupa_akun.html">Lupa akun?</a></td>
							</tr>
						</table>
						</form>						
				</div>		
			</div>
			<div id="main">
				<div id="baru">
					<div class="wrapper">
						<div id="colum" class="clearfix">
							<h1>Buat Akun Baru</h1>
							<h2>Gratis, sampai kapan pun.</h2>
								<form action="proses_daftar.php" method="POST">
									<table id="masuk">
										<tr>
											<td><input type="text" name="nama_depan" placeholder="Nama depan" required></td>
											<td><input type="text" name="nama_belakang" placeholder="Nama belakang" required></td>
										</tr>
										<tr>
											<td colspan="2"><input type="text" name="no_seluler" placeholder="Nomor seluler atau email" required></td>
										</tr>		
										<tr>
											<td colspan="2"><input type="text" name="sandi" placeholder="Kotak sandi baru" required></td>
										</tr>			
									</table>
								<div id="tanggal">
									<h2>Tanggal Lahir</h2>
										<table>
											<tr>
												<td><select name="tanggal" required>
														<option value="">Tanggal</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
														<option value="21">21</option>
														<option value="22">22</option>
														<option value="23">23</option>
														<option value="24">24</option>
														<option value="25">25</option>
														<option value="26">26</option>
														<option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
														<option value="31">31</option>
														</select>
												</td>
												<td><select name="bulan" required>
														<option value="">Bulan</option>
														<option value="januari">January</option>
														<option value="februari">Februari</option>
														<option value="maret">Maret</option>
														<option value="april">April</option>
														<option value="mei">Mei</option>
														<option value="juni">Juni</option>
														<option value="juli">Juli</option>
														<option value="agustus">Agustus</option>
														<option value="september">September</option>
														<option value="oktober">Oktober</option>
														<option value="november">November</option>
														<option value="desember">Desember</option>
														</select>
												</td>
												<td><select name="tahun" required>
														<option value="">Tahun</option>
														<option value="2018">2018</option>
														<option value="2017">2017</option>
														<option value="2016">2016</option>
														<option value="2015">2015</option>
														<option value="2014">2014</option>
														<option value="2013">2013</option>
														<option value="2012">2012</option>
														<option value="2011">2011</option>
														<option value="2010">2010</option>
														<option value="2009">2009</option>
														<option value="2008">2008</option>
														<option value="2007">2007</option>
														<option value="2006">2006</option>
														<option value="2005">2005</option>
														<option value="2004">2004</option>
														<option value="2003">2003</option>
														<option value="2002">2002</option>
														<option value="2001">2001</option>
														<option value="2000">2000</option>
														<option value="1999">1999</option>
														<option value="1998">1998</option>
														<option value="1997">1997</option>
														<option value="1996">1996</option>
														<option value="1995">1995</option>
														<option value="1994">1994</option>
														<option value="1993">1993</option>
														</select>
												</td>
												<td><p><a href="alasan.html">Mengapa saya harus memberikan tanggal lahir saya?</a></p></td>
											</tr>
										</table>	
								</div>
								<div id="jenis_kelamin">
										<table>
											<tr>
												<td><input type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" required>
														<label for="perempuan">Perempuan</label>
												</td>
												<td><input type="radio" name="jenis_kelamin" id="laki_laki" value="laki_laki" required>
														<label for="laki_laki">Laki-laki</label>
												</td>
											</tr>
										</table>
								</div>
								<div id="notiv">
									<p>Dengan mengklik Daftar, Anda menyetujui <a href="#">Ketentuan, Kebijakan Data, dan Kebijakan Cokoie</a> kami. Anda akan menerima Notifikasi SMS dari Facebook dan dapat menolaknya kapan saja.</p>
								</div>
							<button type="submit">Daftar</button>
							</form>
							<div id="buat">
								<hr>
								<p><a href="#">Buat Halaman</a> untuk selebriti, grub musik, atau bisnis</p>
							</div>
						</div>	
					</div>
					
				</div>
			</div>
			
		</div>
		<div id="bahasa" class="wrapper">
							<p><a href="#">Bahasa Indonesia</a> <a href="#">English (UK)</a> <a href="#">Bahasa Jawa</a> <a href="#">Bahasa Melayu</a></p>
							<hr>
							<p><a href="#">Daftar</a> <a href="#">Masuk</a></p>
						</div>
	</body>
</html>
