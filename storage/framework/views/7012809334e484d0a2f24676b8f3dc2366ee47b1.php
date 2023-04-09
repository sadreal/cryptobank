<?php $__env->startSection('content'); ?>
<form method="post" class="validate" autocomplete="off" action="<?php echo e(action('PageController@update', $id)); ?>" enctype="multipart/form-data">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					<span class="panel-title"><?php echo e(_lang('Update Page')); ?></span>
				</div>
				<div class="card-body">

					<?php echo e(csrf_field()); ?>


					<input name="_method" type="hidden" value="PATCH">

					<div class="row">
						<div class="col-md-12">
					        <div class="form-group">
						        <label class="control-label"><?php echo e(_lang('Title')); ?></label>
						        <input type="text" class="form-control" name="trans[title]" value="<?php echo e($page->translation->title); ?>" required>
					        </div>
					    </div>

					    <div class="col-md-12">
					        <div class="form-group">
						        <label class="control-label"><?php echo e(_lang('Body')); ?></label>
						        <textarea class="form-control summernote" name="trans[body]"><?php echo e($page->translation->body); ?></textarea>
					        </div>
					    </div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label"><?php echo e(_lang('Status')); ?></label>
								<select class="form-control auto-select" data-selected="<?php echo e($page->status); ?>" name="status" required>
									<option value="1"><?php echo e(_lang('Publish')); ?></option>
									<option value="0"><?php echo e(_lang('Draft')); ?></option>
								</select>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-lg mt-2"><i class="icofont-check-circled"></i> <?php echo e(_lang('Save Changes')); ?></button>
							</div>
						</div>
					</div>
				</div>
			</div>
	    </div>
	</div>
</form>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/backend/website_management/page/edit.blade.php ENDPATH**/ ?>