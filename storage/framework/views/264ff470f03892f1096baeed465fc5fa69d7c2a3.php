<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h4 class="header-title"><?php echo e(_lang('Update Payment Gateway')); ?></h4>
			</div>
			<div class="card-body">
				<form method="post" class="validate" autocomplete="off" action="<?php echo e(action('PaymentGatewayController@update', $id)); ?>" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<input name="_method" type="hidden" value="PATCH">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label"><?php echo e(_lang('Name')); ?></label>
								<input type="text" class="form-control" name="name" value="<?php echo e($paymentgateway->name); ?>" required>
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label"><?php echo e(_lang('Image')); ?></label>
								<input type="file" class="form-control dropify" name="image" data-allowed-file-extensions="png jpg" data-default-file="<?php echo e(asset('public/backend/images/gateways/'.$paymentgateway->image)); ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label"><?php echo e(_lang('Status')); ?></label>
								<select class="form-control auto-select" data-selected="<?php echo e($paymentgateway->status); ?>" name="status" id="gateway_status" required>
									<option value="0"><?php echo e(_lang('Disable')); ?></option>
									<option value="1"><?php echo e(_lang('Enable')); ?></option>
								</select>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label"><?php echo e(_lang('Currency')); ?></label>
								<select class="form-control auto-select select2" data-selected="<?php echo e($paymentgateway->currency); ?>" id="gateway_currency" name="currency">
									<option value=""><?php echo e(_lang('Select One')); ?></option>
									<?php $__currentLoopData = $paymentgateway->supported_currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</select>
							</div>
						</div>


						<?php $__currentLoopData = $paymentgateway->parameters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($key != 'environment'): ?>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label"><?php echo e(strtoupper(str_replace('_',' ',$key))); ?></label>
										<input type="text" class="form-control" value="<?php echo e($value); ?>" name="parameter_value[<?php echo e($key); ?>]">
									</div>
								</div>
							<?php else: ?>
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label"><?php echo e(strtoupper(str_replace('_',' ',$key))); ?></label>
										<select class="form-control auto-select" data-selected="<?php echo e($value); ?>" name="parameter_value[<?php echo e($key); ?>]">
											<option value="sandbox"><?php echo e(_lang('Sandbox')); ?></option>
											<option value="live"><?php echo e(_lang('Live')); ?></option>
										</select>
									</div>
								</div>
							<?php endif; ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label"><?php echo e(_lang('Exchange Rate')); ?></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text">1&nbsp;<?php echo e(get_base_currency()); ?>&nbsp;=</span>
									</div>
									<input type="text" class="form-control" name="exchange_rate" id="exchange_rate" value="<?php echo e($paymentgateway->exchange_rate); ?>" <?php echo e($paymentgateway->status == 1 ? 'required' : ''); ?>>
									<div class="input-group-append">
										<span class="input-group-text"><span id="gateway_currency_preview"><?php echo e(_lang('Gateway Currency')); ?></span></span>
									</div></br>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label"><?php echo e(_lang('Minimum Deposit Amount')); ?></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><?php echo e(get_base_currency()); ?></span>
									</div>
									<input type="text" class="form-control float-field" name="minimum_amount" value="<?php echo e($paymentgateway->minimum_amount); ?>" required>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label"><?php echo e(_lang('Maximum Deposit Amount')); ?></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><?php echo e(get_base_currency()); ?></span>
									</div>
									<input type="text" class="form-control float-field" name="maximum_amount" value="<?php echo e($paymentgateway->maximum_amount); ?>" required>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label"><?php echo e(_lang('Fixed Charge')); ?></label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><?php echo e(get_base_currency()); ?></span>
									</div>
									<input type="text" class="form-control" name="fixed_charge" value="<?php echo e($paymentgateway->fixed_charge); ?>" required>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label"><?php echo e(_lang('Charge In Percentage')); ?></label>
								<div class="input-group mb-3">
									<input type="text" class="form-control" name="charge_in_percentage" value="<?php echo e($paymentgateway->charge_in_percentage); ?>" required>
									<div class="input-group-append">
										<span class="input-group-text">%</span>
									</div>
								</div>
							</div>
						</div>


						<div class="col-md-12 mt-2">
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-lg"><i class="icofont-check-circled"></i> <?php echo e(_lang('Save Changes')); ?></button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/backend/payment_gateway/edit.blade.php ENDPATH**/ ?>