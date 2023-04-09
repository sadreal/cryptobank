<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="header-title"><?php echo e(_lang('SMS Templates')); ?></h4>
			</div>
			<div class="card-body">
				<table class="table table-bordered data-table">
					<thead>
						<tr>
							<th><?php echo e(_lang('Name')); ?></th>
							<th><?php echo e(_lang('Subject')); ?></th>
							<th><?php echo e(_lang('Status')); ?></th>
							<th class="text-center"><?php echo e(_lang('Action')); ?></th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $emailtemplates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emailtemplate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr id="row_<?php echo e($emailtemplate->id); ?>">
							<td class='name'><?php echo e(ucwords(str_replace('_',' ',$emailtemplate->name))); ?></td>
							<td class='subject'><?php echo e($emailtemplate->subject); ?></td>
							<td class='status'><?php echo xss_clean(status($emailtemplate->sms_status)); ?></td>
							<td class="text-center">
								<a href="<?php echo e(action('SMSTemplateController@edit', $emailtemplate['id'])); ?>" class="btn btn-primary btn-sm"><i class="icofont-pencil-alt-5"></i> <?php echo e(_lang('Edit')); ?></a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/backend/administration/sms_template/list.blade.php ENDPATH**/ ?>