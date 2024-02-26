<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Data Mahasiswa Berprestasi</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>Nama Lengkap</th>
							<th>NIM</th>
							<th>Jenis Kelamin</th>
							<th>Tanggal Lahir</th>
							<th>Jurusan</th>
							<th>Telepon</th>
							<th>Alamat</th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from mahasiswa_prestasi order by nim ASC");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['nama']?></td>
							<td><?php echo $row['nim']?></td>
							<td><?php echo $row['jenis_kelamin']?></td>
							<td><?php echo $row['tanggal_lahir']?></td>
							<td><?php echo $row['prodi']?></td>
							<td><?php echo $row['telepon']?></td>
							<td><?php echo $row['alamat']?></td>
						</tr>
						<?php } ?>
						</table>
				</div>
      </div>
			</div><!-- Akhir Kolom -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		<?php include "footer.php";?>