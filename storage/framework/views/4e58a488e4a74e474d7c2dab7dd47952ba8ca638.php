<form method="post" class="ajax-screen-submit" autocomplete="off" action="<?php echo e(action('NavigationController@update', $id)); ?>" enctype="multipart/form-data">
	<?php echo e(csrf_field()); ?>

	<input name="_method" type="hidden" value="PATCH">

	<div class="col-md-12">
		<div class="form-group">
		   <label class="control-label"><?php echo e(_lang('Name')); ?></label>
		   <input type="text" class="form-control" name="name" value="<?php echo e($navigation->name); ?>" required>
		</div>
	</div>

	<div class="col-md-12">
		<div class="form-group">
			<label class="control-label"><?php echo e(_lang('Status')); ?></label>
			<select class="form-control auto-select" data-selected="<?php echo e($navigation->status); ?>" name="status" required>
				<option value="1"><?php echo e(_lang('Active')); ?></option>
				<option value="0"><?php echo e(_lang('In Active')); ?></option>
			</select>
		</div>
	</div>

	<div class="form-group">
	    <div class="col-md-12">
		    <button type="submit" class="btn btn-primary"><i class="icofont-check-circled"></i> <?php echo e(_lang('Update')); ?></button>
	    </div>
	</div>
</form>

<?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/backend/site_navigation/modal/edit.blade.php ENDPATH**/ ?>