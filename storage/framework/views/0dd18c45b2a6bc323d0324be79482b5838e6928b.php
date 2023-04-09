

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header d-flex align-items-center">
				<span class="panel-title"><?php echo e($navigation->name); ?></span>
				<a class="btn btn-primary btn-sm ml-auto" href="<?php echo e(route('navigation_items.create', $navigation->id)); ?>"><i class="icofont-plus-circle"></i> <?php echo e(_lang('New Navigation Item')); ?></a>
			</div>
			<div class="card-body">

			    <div class="dd">
				  <?php echo e(navigationTree($navigationitems, 0, 'NavigationItemController')); ?>

			    </div>

				<form method="post" action="<?php echo e(route('navigations.store_sorting')); ?>">
					<?php echo e(csrf_field()); ?>

					<textarea class="form-control d-none" name="sortable_menu" id="nestable-output"></textarea>
					</br>
					<button type="submit" class="btn btn-outline-success" id="save"><i class="icofont-check-circled"></i> <?php echo e(_lang('Save Sorting')); ?></button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js-script'); ?>
<script src="<?php echo e(asset('public/backend/assets/js/jquery.nestable.js')); ?>"></script>
<script src="<?php echo e(asset('public/backend/assets/js/navigation.js')); ?>"></script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/backend/site_navigation/view.blade.php ENDPATH**/ ?>