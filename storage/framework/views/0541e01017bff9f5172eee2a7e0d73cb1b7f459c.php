<?php $__env->startSection('content'); ?>

<div class="row">
	<div class="col-lg-12">
		<div class="card">
		    <div class="card-header d-flex align-items-center">
				<span class="panel-title"><?php echo e(_lang('Navigation List')); ?></span>
				<a class="btn btn-primary btn-sm ml-auto" data-title="<?php echo e(_lang('Add Navigation')); ?>" href="<?php echo e(route('navigations.create')); ?>"><i class="icofont-plus-circle"></i> <?php echo e(_lang('Add New')); ?></a>
			</div>
			<div class="card-body">
				<table id="navigations_table" class="table table-bordered data-table">
					<thead>
					    <tr>
						    <th><?php echo e(_lang('Name')); ?></th>
						    <th><?php echo e(_lang('Manage')); ?></th>
						    <th><?php echo e(_lang('Status')); ?></th>
							<th class="text-center"><?php echo e(_lang('Action')); ?></th>
					    </tr>
					</thead>
					<tbody>
					    <?php $__currentLoopData = $navigations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $navigation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					    <tr data-id="row_<?php echo e($navigation->id); ?>">
							<td class='name'><?php echo e($navigation->name); ?></td>
							<td class='manage'>
								<a href="<?php echo e(route('navigations.show',$navigation->id)); ?>" class="btn btn-success btn-sm"><i class="icofont-navigation-menu"></i> <?php echo e(_lang('Manage Menu Items')); ?></a>
							</td>
							<td class='status'><?php echo e($navigation->status == 1 ? _lang('Active') : _lang('In-Active')); ?></td>
							<td class="text-center">
								<div class="dropdown">
								  <button class="btn btn-dark dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  <?php echo e(_lang('Action')); ?>

								  <i class="fas fa-angle-down"></i>
								  </button>
								  <form action="<?php echo e(action('NavigationController@destroy', $navigation['id'])); ?>" method="post">
									<?php echo e(csrf_field()); ?>

									<input name="_method" type="hidden" value="DELETE">

									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a href="<?php echo e(action('NavigationController@edit', $navigation['id'])); ?>" data-title="<?php echo e(_lang('Update Navigation')); ?>" class="dropdown-item dropdown-edit ajax-modal"><i class="icofont-ui-edit"></i> <?php echo e(_lang('Edit')); ?></a>
										<button class="btn-remove dropdown-item" type="submit"><i class="icofont-trash"></i> <?php echo e(_lang('Delete')); ?></button>
									</div>
								  </form>
								</div>
							</td>
					    </tr>
					    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/backend/site_navigation/list.blade.php ENDPATH**/ ?>