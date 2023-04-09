<form method="post" class="ajax-screen-submit" autocomplete="off" action="<?php echo e(route('roles.store')); ?>" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>


    <div class="col-md-12">
		<div class="form-group">
			<label class="control-label"><?php echo e(_lang('Name')); ?></label>
			<input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required>
		</div>
	</div>

	<div class="col-md-12">
		<div class="form-group">
			<label class="control-label"><?php echo e(_lang('Description')); ?></label>
			<textarea class="form-control" name="description"><?php echo e(old('description')); ?></textarea>
		</div>
	</div>


	<div class="col-md-12">
	    <div class="form-group">
	        <button type="reset" class="btn btn-danger"><?php echo e(_lang('Reset')); ?></button>
		    <button type="submit" class="btn btn-primary"><i class="icofont-check-circled"></i> <?php echo e(_lang('Save')); ?></button>
	    </div>
	</div>
</form>
<?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/backend/system_user/role/modal/create.blade.php ENDPATH**/ ?>