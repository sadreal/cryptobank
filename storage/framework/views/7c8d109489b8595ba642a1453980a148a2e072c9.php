<form method="post" class="validate" autocomplete="off" action="<?php echo e(route('deposit.automatic_deposit',$deposit_method->id)); ?>" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="control-label"><?php echo e(_lang('Amount')); ?></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><?php echo e(get_base_currency()); ?></span>
                    </div>
                    <input type="text" class="form-control float-field" name="amount" value="<?php echo e(old('amount')); ?>" required>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label"><?php echo e(_lang('Minimum Deposit')); ?></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><?php echo e(get_base_currency()); ?></span>
                    </div>
                    <input type="text" class="form-control float-field" value="<?php echo e($deposit_method->minimum_amount); ?>" readonly>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label"><?php echo e(_lang('Maximum Deposit')); ?></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><?php echo e(get_base_currency()); ?></span>
                    </div>
                    <input type="text" class="form-control float-field" value="<?php echo e($deposit_method->maximum_amount); ?>" readonly>
                </div>
            </div>
        </div>


        <div class="col-md-12 mb-2">
            <h6 class="text-danger text-center"><b><?php echo e(decimalPlace($deposit_method->fixed_charge, currency())); ?> + <?php echo e($deposit_method->charge_in_percentage); ?>% <?php echo e(_lang('transaction charge will be applied')); ?></b></h6>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="icofont-check-circled"></i> <?php echo e(_lang('Process')); ?></button>
            </div>
        </div>
    </div>
</form>
<?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/backend/customer_portal/deposit/modal/automatic_deposit.blade.php ENDPATH**/ ?>