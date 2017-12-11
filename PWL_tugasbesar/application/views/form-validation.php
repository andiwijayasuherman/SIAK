<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Form Mahasiswa</h1>
				<?php 
					if (validation_errors() == TRUE){
						echo "<div class='alert alert-danger' role='alert'>";
						echo validation_errors();
						echo "</div>";
					}
					$attributes = array('class' => 'form-horizontal' );
					echo form_open('validation', $attributes);
				?>

				<div class="form-group">
				<label class="col-sm-2 control-label">Nama</label>
				<div class="col-sm-6">
				<input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa" value="<?=set_value('nama');?>"></input>
				</div>
				</div>
 
				<div class="form-group">
				<label class="col-sm-2 control-label">NIM</label>
				<div class="col-sm-6">
				<input type="text" name="nim" class="form-control" placeholder="Nomor Induk Mahasiswa" value="<?=set_value('nim');?>"></input>
				</div>
				</div>

				<div class="form-group">
				<label class="col-sm-2 control-label">IPK</label>
				<div class="col-sm-6">
				<input type="text" name="ipk" class="form-control" placeholder="Nilai IPK" value="<?=set_value('ipk');?>"></input>
				</div>
				</div>

				<div class="form-group">
				<label class="col-sm-2 control-label sr-only">Submit</label>
				<div class="col-sm-10">
				<input type="submit" name="submit" class="btn btn-primary" value="SUBMIT"></input>
				</div>
				</div>
		</div>
	</div>
</div>