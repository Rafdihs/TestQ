<h2>Data Pegawai</h2>
			<hr />

			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						
						<th>Company</th>
						<th>Department</th>
						<th>Nama</th>
						<th>Tittle</th>
						<th>Salary<th>
						
					</tr>
					<tr>
						<td>

						</td>
					</tr>
					<?php
// buat koneksi dengan MySQL, gunakan database: universitas
$con = mysqli_connect("localhost", "root", "", "test qa");
// jalankan query
$result = mysqli_query($con, "SELECT * FROM pegawai");
// tampilkan query
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{ ?> <tr>
		<td><?php  echo $row['Company'];?></td>
		<td><?php  echo $row['Department'];?></td>
		<td><?php  echo $row['Nama'];?></td>
		<td><?php  echo $row['Tittle'];?></td>
		<td><?php  echo $row['Salary'];?></td>
	
		</tr>	
<?php }

?>
					
				</table>
			</div> <!-- /.table-responsive -->
		</div> <!-- /.content -->
	</div> <!-- /.container -->
</section>
</section>
</div>
