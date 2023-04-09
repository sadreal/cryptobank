<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-lg-6 offset-lg-3">
		<div class="card">
			<div class="card-header">
				<h4 class="header-title text-center"><?php echo e(_lang('Payment Confirm')); ?></h4>
			</div>
			<div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label"><?php echo e(_lang('Amount')); ?></label>
                            <input type="text" class="form-control" name="code" value="<?php echo e(decimalPlace($deposit->amount, currency())); ?>" readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label"><?php echo e(_lang('Charge')); ?></label>
                            <input type="text" class="form-control" name="code" value="<?php echo e(decimalPlace($deposit->fee, currency())); ?>" readonly>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label"><?php echo e(_lang('Total')); ?></label>
                            <input type="text" class="form-control" name="code" value="<?php echo e(decimalPlace($deposit->amount + $deposit->fee, currency())); ?>" readonly>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label"><?php echo e(_lang('Converted Total')); ?></label>
                            <input type="text" class="form-control" name="code" value="<?php echo e(decimalPlace(convert_currency_2(1, $deposit->gateway->exchange_rate, $deposit->amount + $deposit->fee), currency($deposit->gateway->currency))); ?>" readonly>
                        </div>
                    </div>

                    <div class="col-md-12 mt-4">
                        <div class="form-group">
                            <div id="paypal-button-container"></div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js-script'); ?>
<!--PayPal Pay Now Button-->
<script src="https://www.paypal.com/sdk/js?client-id=<?php echo e($deposit->gateway->parameters->client_id); ?>&currency=<?php echo e($deposit->gateway->currency); ?>&disable-funding=credit,card"></script>

<div id="paypal-button-container"></div>

<script>
  paypal.Buttons({
	createOrder: function(data, actions) {
	  	return actions.order.create({
			purchase_units: [{
			  amount: {
				value: '<?php echo e(convert_currency_2(1, $deposit->gateway->exchange_rate, $deposit->amount + $deposit->fee)); ?>'
			  }
			}]
	 	});
	},
	onApprove: function(data, actions) {
		window.location.href = "<?php echo e($data->callback_url); ?>?order_id=" + data.orderID + "&deposit_id=<?php echo e($deposit->id); ?>";
	},
	onCancel: function (data) {
		alert("<?php echo e(_lang('Payment Cancelled')); ?>");
	}
  }).render('#paypal-button-container');

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/backend/customer_portal/gateway/PayPal.blade.php ENDPATH**/ ?>