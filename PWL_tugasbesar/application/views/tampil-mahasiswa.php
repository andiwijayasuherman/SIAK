<div class="container">
	<h2>Create-Read-Update-Delete</h2>
	<hr/>
	<button type="button" class="btn btn-link" data-toggle="modal" data-target="#tambahModal"><span class="glyphicon glyphicon-plus"></span> Tambah Data </button>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>NO</th>
				<th>NIM</th>
				<th>NAMA</th>
				<th>KELAS</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$i = 1;
			foreach ($mahasiswa as $key => $value){
			?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $value['nim'];?></td>
				<td><?php echo $value['nama'];?></td>
				<td><?php echo $value['kelas'];?></td>
				<td>
					<button type="button" class="btn btn-success tombol" 
					data-toggle="modal" data-target="#editModal"
					data-id="<?php echo $value['id'];?>"
					data-nim="<?php echo $value['nim'];?>"
					data-nama="<?php echo $value['nama'];?>"
					data-pass="<?php echo $value['password'];?>"
					data-kelas="<?php echo $value['kelas'];?>"><span class="glyphicon glyphicon-pencil"></span>
					</button>
					<button type="button" class="btn btn-danger tombol" 
					data-toggle="modal" data-target="#deleteModal"
					data-id="<?php echo $value['id'];?>"
					data-nama="<?php echo $value['nama'];?>"><span class="glyphicon glyphicon-trash"></span>
					</button>
				</td>
			</tr>
			<?php
			$i++;
		}
		?>
		</tbody>
	</table>
</div>