<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header d-flex align-items-center">
				<h4 class="header-title"><?php echo e(_lang('Update Email Template')); ?></h4>
			</div>
			<div class="card-body">
				<form method="post" class="validate" autocomplete="off" action="<?php echo e(action('EmailTemplateController@update', $id)); ?>" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					<input name="_method" type="hidden" value="PATCH">

					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label"><?php echo e(_lang('Name')); ?></label>
							<input type="text" class="form-control" name="name" value="<?php echo e($emailtemplate->name); ?>" readOnly="true">
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label"><?php echo e(_lang('Short Code')); ?></label>
							<pre class="border py-2 px-2"><?php echo e($emailtemplate->shortcode); ?></pre>
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label"><?php echo e(_lang('Subject')); ?></label>
							<input type="text" class="form-control" name="subject" value="<?php echo e($emailtemplate->subject); ?>" required>
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label"><?php echo e(_lang('Body')); ?></label>
							<textarea class="form-control summernote" name="email_body"><?php echo e($emailtemplate->email_body); ?></textarea>
						</div>
					</div>

					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label"><?php echo e(_lang('Status')); ?></label>
							<select class="form-control auto-select" name="email_status" data-selected="<?php echo e($emailtemplate->email_status); ?>" required>
								<option value="1"><?php echo e(_lang('Active')); ?></option>
								<option value="0"><?php echo e(_lang('Deactive')); ?></option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary"><i class="icofont-check-circled"></i> <?php echo e(_lang('Update')); ?></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/backend/administration/email_template/edit.blade.php ENDPATH**/ ?>