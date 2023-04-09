<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title"><?php echo e(_lang('Create User')); ?></h4>
            </div>
            <div class="card-body">
                <form method="post" class="validate" autocomplete="off" action="<?php echo e(route('users.store')); ?>"
                    enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>


                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="form-group row">
                                <label class="col-xl-3 col-form-label"><?php echo e(_lang('Name')); ?></label>
                                <div class="col-xl-9">
                                    <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>"
                                        required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-xl-3 col-form-label"><?php echo e(_lang('Email')); ?></label>
                                <div class="col-xl-9">
                                    <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>"
                                        required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-xl-3 col-form-label"><?php echo e(_lang('Account Number')); ?></label>
                                <div class="col-xl-9">
                                    <input type="text" class="form-control" name="account_number" value="<?php echo e(old('account_number', next_account_number())); ?>"
                                        required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-form-label"><?php echo e(_lang('Password')); ?></label>
                                <div class="col-xl-9">
                                    <input type="password" class="form-control" name="password" value="" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-xl-3 col-form-label"><?php echo e(_lang('Country Code')); ?></label>
                                <div class="col-xl-9">
                                    <select class="form-control select2 auto-select" data-selected="<?php echo e(old('country_code')); ?>" name="country_code" required>
                                        <option value=""><?php echo e(_lang('Select One')); ?></option>
                                        <?php $__currentLoopData = get_country_codes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value['dial_code']); ?>"><?php echo e($value['country'].' (+'.$value['dial_code'].')'); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-xl-3 col-form-label"><?php echo e(_lang('Phone')); ?></label>
                                <div class="col-xl-9">
                                    <input type="text" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-form-label"><?php echo e(_lang('Branch')); ?></label>
                                <div class="col-xl-9">
                                    <select class="form-control auto-select" data-selected="<?php echo e(old('branch_id')); ?>"
                                        name="branch_id" required>
                                        <option value=""><?php echo e(_lang('Select One')); ?></option>
					                    <?php echo e(create_option('branches','id','name')); ?>

                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-xl-3 col-form-label"><?php echo e(_lang('Status')); ?></label>
                                <div class="col-xl-9">
                                    <select class="form-control auto-select" data-selected="<?php echo e(old('status')); ?>"
                                        name="status" required>
                                        <option value=""><?php echo e(_lang('Select One')); ?></option>
                                        <option value="1"><?php echo e(_lang('Active')); ?></option>
                                        <option value="0"><?php echo e(_lang('In Active')); ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-form-label"><?php echo e(_lang('Email Verified')); ?></label>
                                <div class="col-xl-9">
                                    <select class="form-control select2 auto-select" name="email_verified_at">
                                        <option value=""><?php echo e(_lang('No')); ?></option>
                                        <option value="<?php echo e(now()); ?>"><?php echo e(_lang('Yes')); ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-form-label"><?php echo e(_lang('SMS Verified')); ?></label>
                                <div class="col-xl-9">
                                    <select class="form-control select2 auto-select" name="sms_verified_at">
                                        <option value=""><?php echo e(_lang('No')); ?></option>
                                        <option value="<?php echo e(now()); ?>"><?php echo e(_lang('Yes')); ?></option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-3 col-form-label"><?php echo e(_lang('Profile Picture')); ?></label>
                                <div class="col-xl-9">
                                    <input type="file" class="form-control dropify" name="profile_picture">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-xl-9 offset-xl-3">
                                    <button type="submit" class="btn btn-primary"><?php echo e(_lang('Create User')); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/backend/user/create.blade.php ENDPATH**/ ?>