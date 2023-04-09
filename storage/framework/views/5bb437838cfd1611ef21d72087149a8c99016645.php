<form method="post" class="ajax-screen-submit" autocomplete="off" action="<?php echo e(route('system_users.store')); ?>" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>


	<div class="row p-2">
		<div class="col-md-12">
			<div class="form-group">
				<label class="control-label"><?php echo e(_lang('Name')); ?></label>
				<input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required>
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label"><?php echo e(_lang('Email')); ?></label>
				<input type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>
			</div>
		</div>


		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label"><?php echo e(_lang('Password')); ?></label>
				<input type="password" class="form-control" name="password" value="<?php echo e(old('password')); ?>" required>
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label"><?php echo e(_lang('User Type')); ?></label>
				<select class="form-control select2 auto-select" data-selected="<?php echo e(old('user_type')); ?>" name="user_type" id="user_type" required>
					<option value=""><?php echo e(_lang('Select One')); ?></option>
					<option value="admin"><?php echo e(_lang('Admin')); ?></option>
					<option value="user"><?php echo e(_lang('User')); ?></option>
				</select>
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label"><?php echo e(_lang('User Role')); ?></label>
				<select class="form-control select2-ajax" data-href="<?php echo e(route('roles.create')); ?>" data-title="<?php echo e(_lang('Add New Role')); ?>" data-value="id" data-display="name" data-table="roles" id="role_id" name="role_id" disabled>
				</select>
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<label class="control-label"><?php echo e(_lang('Status')); ?></label>
				<select class="form-control select2 auto-select" data-selected="<?php echo e(old('status')); ?>" name="status" required>
					<option value=""><?php echo e(_lang('Select One')); ?></option>
					<option value="1"><?php echo e(_lang('Active')); ?></option>
					<option value="0"><?php echo e(_lang('In Active')); ?></option>
				</select>
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<label class="control-label"><?php echo e(_lang('Profile Picture')); ?></label>
				<input type="file" class="form-control dropify" name="profile_picture" >
			</div>
		</div>


		<div class="col-md-12">
			<div class="form-group">
				<button type="reset" class="btn btn-danger"><?php echo e(_lang('Reset')); ?></button>
				<button type="submit" class="btn btn-primary"><i class="icofont-check-circled"></i> <?php echo e(_lang('Save')); ?></button>
			</div>
		</div>
	</div>
</form>
<?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/backend/system_user/modal/create.blade.php ENDPATH**/ ?>