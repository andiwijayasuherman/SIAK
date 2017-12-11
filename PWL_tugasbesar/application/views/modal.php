<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="tambahModalLabel">Tambah Data</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="crud/insert_data">
					<div class="form-group">
						<label for="nim" class="control-label">Nim : </label>
						<input type="text" name="nim" class="form-control" id="nim">
					</div>
					<div class="form-group">
						<label for="nama" class="control-label">Nama : </label>
						<input type="text" name="nama" class="form-control" id="nama">
					</div>
					<div class="form-group">
						<label for="pass" class="control-label">Password : </label>
						<input type="Password" name="pass" class="form-control" id="pass">
					</div>
					<div class="form-group">
						<label for="kelas" class="control-label">Kelas </label>
						<select class="form-control" name="kelas">
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
						</select>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button class="btn btn-primary">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="editModalLabel">Edit Data</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="crud/edit_data">
					<div class="form-group">
						<label for="nim" class="control-label">Nim : </label>
						<input type="text" name="nim" class="form-control nim" id="nim">
						<input type="hidden" name="id" class="form-control id" id="id">
					</div>
					<div class="form-group">
						<label for="nama" class="control-label">Nama : </label>
						<input type="text" name="nama" class="form-control nama" id="nama">
					</div>
					<div class="form-group">
						<label for="pass" class="control-label">Password : </label>
						<input type="password" name="pass" class="form-control pass" id="pass">
					</div>
					<div class="form-group">
						<label for="kelas" class="control-label">Kelas </label>
						<select class="form-control kelas" name="kelas">
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
						</select>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button class="btn btn-primary">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="deleteModalLabel">Delete Data</h4>
			</div>
			<div class="modal-body">
				<div class="delete alert alert-danger" role="alert"></div>
			</div>
			<div class="modal-footer">
				<form method="post" action="crud/delete_data">
					<input type="hidden" name="id" class="form-control id" id="id">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button class="btn btn-danger">DELETE</button>
				</form>
			</div>
		</div>
	</div>
</div>

