<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header d-flex align-items-center">
				<h4 class="header-title"><?php echo e(_lang('Deposit Gateways')); ?></h4>
			</div>
			<div class="card-body">
				<table id="payment_gateways_table" class="table table-bordered data-table">
					<thead>
					    <tr>
							<th><?php echo e(_lang('Image')); ?></th>
						    <th><?php echo e(_lang('Name')); ?></th>
							<th><?php echo e(_lang('Status')); ?></th>
							<th class="text-center"><?php echo e(_lang('Action')); ?></th>
					    </tr>
					</thead>
					<tbody>
					    <?php $__currentLoopData = $paymentgateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paymentgateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					    <tr data-id="row_<?php echo e($paymentgateway->id); ?>">
							<td class='image'><img class="thumb-sm" src="<?php echo e(asset('public/backend/images/gateways/'.$paymentgateway->image)); ?>"/></td>
							<td class='name'><?php echo e($paymentgateway->name); ?></td>
							<td class='status'><?php echo xss_clean(status($paymentgateway->status)); ?></td>

							<td class="text-center">
								<a href="<?php echo e(action('PaymentGatewayController@edit', $paymentgateway['id'])); ?>" class="btn btn-primary btn-sm"><i class="icofont-ui-edit"></i> <?php echo e(_lang('Config')); ?></a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/backend/payment_gateway/list.blade.php ENDPATH**/ ?>