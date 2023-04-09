<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10">
            <div class="card card-signin my-5 p-3">
				<div class="card-body">
				    <img class="logo" src="<?php echo e(get_logo()); ?>">

					<h5 class="text-center py-4"><?php echo e(_lang('Create Your Account Now')); ?></h4>

                    <form method="POST" class="form-signup" autocomplete="off" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
							<div class="col-md-12">
                                <input id="name" type="text" placeholder="<?php echo e(_lang('Name')); ?>" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="<?php echo e(_lang('E-Mail Address')); ?>" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6 mb-sm-3 mb-lg-0 pr-lg-1">
                                <select class="form-control select2" name="country_code" required>
                                    <option value=""><?php echo e(_lang('Country Code')); ?></option>
                                    <?php $__currentLoopData = get_country_codes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value['dial_code']); ?>" <?php echo e(old('country_code') == $value['dial_code'] ? 'selected' : ''); ?>><?php echo e($value['country'].' (+'.$value['dial_code'].')'); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

							<div class="col-lg-6 pl-lg-0">
                                <input id="phone" type="text" placeholder="<?php echo e(_lang('Phone')); ?>" class="form-control<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" name="phone" value="<?php echo e(old('phone')); ?>" required>

                                <?php if($errors->has('phone')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('phone')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="<?php echo e(_lang('Password')); ?>" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                           <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" placeholder="<?php echo e(_lang('Confirm Password')); ?>" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="hidden" class="<?php echo e($errors->has('g-recaptcha-response') ? ' is-invalid' : ''); ?>" name="g-recaptcha-response" id="recaptcha">
                                <?php if($errors->has('g-recaptcha-response')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="checkbox" class="<?php echo e($errors->has('agree') ? ' is-invalid' : ''); ?>" name="agree" id="agree">
                                <label class="d-inline" for="agree">
                                    &nbsp;I agree with <a href="<?php echo e(url('/' . get_option('privacy_policy_page'))); ?>" target="blank"><?php echo e(_lang('Privacy Policy')); ?></a>
                                        &amp;
                                        <a href="<?php echo e(url('/' . get_option('terms_condition_page'))); ?>" target="blank"><?php echo e(_lang('Terms & Condition')); ?></a>
                                </label>
                                <?php if($errors->has('agree')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('agree')); ?> !</strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

						<div class="form-group row mt-5">
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-primary btn-login" id="create-account-btn" disabled>
								<?php echo e(_lang('Create My Account')); ?>

                                </button>
							</div>
						</div>
                        <div class="form-group row mt-5">
							<div class="col-md-12 text-center">
							   <?php echo e(_lang('Already Have An Account?')); ?>

                               <a href="<?php echo e(route('login')); ?>"><?php echo e(_lang('Log In Here')); ?></a>
							</div>
						</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo e(asset('public/backend/assets/js/jquery-3.6.0.min.js')); ?>"></script>

<?php if(get_option('enable_recaptcha', 0) == 1): ?>
<script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(get_option('recaptcha_site_key')); ?>"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('<?php echo e(get_option('recaptcha_site_key')); ?>', {action: 'register'}).then(function(token) {
        if (token) {
            document.getElementById('recaptcha').value = token;
        }
        });
    });
</script>
<?php endif; ?>

<script>
    (function ($) {
        "use strict";

        $(this).is(":checked") ? $("#create-account-btn").prop('disabled', false) : $("#create-account-btn").prop('disabled', true);

        $(document).on('click','#agree', function(){
            $(this).is(":checked") ? $("#create-account-btn").prop('disabled', false) : $("#create-account-btn").prop('disabled', true);
        });
    })(jQuery);
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/auth/register.blade.php ENDPATH**/ ?>