<div class="container">
	<br/>
	<h1>Helper Form</h1>
	<hr/>

	<?=form_open('form/getPost') ?>
	<div class="form-group">
		<label for="username">Username</label>
		<?=form_input($username) ?>
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<?=form_input($password) ?>
	</div>
	<div class="form-group">
		<label for="address">Address</label>
		<?=form_textarea($address) ?>
	</div>
	<div class="form-group">
		<label for="bloodtype">Bloods Type</label>
		<?=form_dropdown('blood', $option,'', $attributes = array ('class' => 'form-control')); ?>
	</div>
	<div class="form-group">
		<label for="gender">Gender</label>
		<div class="radio">
			<label>
				<?=form_radio($radio['male']); echo form_label('Male', 'gender'); ?>
			</label>
		</div>
		<div class="radio">
			<label>
				<?=form_radio($radio['female']); echo form_label('Female', 'gender'); ?>
			</label>
		</div>
		
	</div>
	<?=form_reset('myreset','RESET', $attributes=array('class' => 'btn btn-danger')) ?>
	<?=form_submit('mysubmit','SUBMIT', $attributes=array('class' => 'btn btn-primary')) ?>
	<hr/>
</div>