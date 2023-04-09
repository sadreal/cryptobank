

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<span class="panel-title"><?php echo e(_lang('Update Navigation Item')); ?></span>
			</div>
			<div class="card-body">
				<form method="post" class="validate" autocomplete="off" action="<?php echo e(action('NavigationItemController@update', $id)); ?>" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<input name="_method" type="hidden" value="PATCH">
					<div class="row">

						<div class="col-md-6">
					        <div class="form-group">
						        <label class="control-label"><?php echo e(_lang('Name')); ?></label>
						        <input type="text" class="form-control" name="trans[name]" value="<?php echo e($navigationitem->translation->name); ?>">
					        </div>
					    </div>

						<div class="col-md-6">
					        <div class="form-group">
						        <label class="control-label"><?php echo e(_lang('Navigation Type')); ?></label>
						        <select class="form-control auto-select" data-selected="<?php echo e($navigationitem->type); ?>" id="navigation_type" name="type" required>
									<option value='page'><?php echo e(_lang('Page')); ?></option>
									<option value='dynamic_url'><?php echo e(_lang('Dynamic URL')); ?></option>
									<option value='custom_url'><?php echo e(_lang('Custom URL')); ?></option>
								</select>
							</div>
					    </div>

						<div class="col-md-6 <?php echo e($navigationitem->type == 'page' ?: 'd-none'); ?>" id="page">
					        <div class="form-group">
						        <label class="control-label"><?php echo e(_lang('Page')); ?> <span class="required"> *</span></label>
						        <select class="form-control select2 auto-select" data-selected="<?php echo e($navigationitem->page_id); ?>" name="page_id">
						        	<option value=""><?php echo e(_lang('Select Page')); ?></option>
									<?php $__currentLoopData = \App\Models\Page::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($page->id); ?>"><?php echo e($page->translation->title); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						        </select>
					        </div>
					    </div>

						<div class="col-md-6  <?php echo e($navigationitem->type == 'dynamic_url' || $navigationitem->type == 'custom_url' ?: 'd-none'); ?>" id="url">
					        <div class="form-group">
						        <label class="control-label"><?php echo e(_lang('URL')); ?> <span class="required"> *</span></label>
						        <input type="text" class="form-control" name="url" value="<?php echo e($navigationitem->url); ?>">
					        </div>
					    </div>

						<div class="col-md-6">
					        <div class="form-group">
						        <label class="control-label"><?php echo e(_lang('Icon')); ?></label>
						        <input type="text" class="form-control" name="icon" value="<?php echo e($navigationitem->icon); ?>">
					        </div>
					    </div>

						<div class="col-md-6">
					        <div class="form-group">
						        <label class="control-label"><?php echo e(_lang('Target')); ?></label>
						        <select class="form-control auto-select" data-selected="<?php echo e($navigationitem->target); ?>" name="target" required>
									<option value="_self"><?php echo e(_lang('Same Window')); ?></option>
									<option value="_blank"><?php echo e(_lang('New Window')); ?></option>
								</select>
							</div>
					    </div>

					    <div class="col-md-6">
					        <div class="form-group">
						        <label class="control-label"><?php echo e(_lang('CSS Class')); ?></label>
						        <input type="text" class="form-control" name="css_class" value="<?php echo e($navigationitem->css_class); ?>">
					        </div>
					    </div>

					    <div class="col-md-6">
					        <div class="form-group">
						        <label class="control-label"><?php echo e(_lang('CSS ID')); ?></label>
						        <input type="text" class="form-control" name="css_id" value="<?php echo e($navigationitem->css_id); ?>">
					        </div>
					    </div>

						<div class="col-md-6">
					        <div class="form-group">
						        <label class="control-label"><?php echo e(_lang('Status')); ?></label>
						        <select class="form-control auto-select" data-selected="<?php echo e($navigationitem->status); ?>" name="status" required>
									<option value="1"><?php echo e(_lang('Active')); ?></option>
									<option value="0"><?php echo e(_lang('In Active')); ?></option>
								</select>
							</div>
					    </div>


						<div class="col-md-12">
							<div class="form-group">
								<button type="submit" class="btn btn-primary"><i class="icofont-check-circled"></i> <?php echo e(_lang('Save')); ?></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js-script'); ?>
<script src="<?php echo e(asset('public/backend/assets/js/navigation.js')); ?>"></script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/backend/site_navigation/navigation_item/edit.blade.php ENDPATH**/ ?>