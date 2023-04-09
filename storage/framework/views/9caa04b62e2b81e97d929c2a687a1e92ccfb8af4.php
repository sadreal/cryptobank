<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <form method="post" id="permissions" class="validate" autocomplete="off" action="<?php echo e(route('permission.store')); ?>">
            <?php echo csrf_field(); ?>
			<div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label"><?php echo e(_lang('Select Role')); ?></label>
                                    <select class="form-control select2" id="role_id" name="role_id" required>
                                        <option value=""><?php echo e(_lang('Select One')); ?></option>
                                        <?php echo e(create_option("roles", "id", "name", $role_id)); ?>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <span class="d-none panel-title"><?php echo e(_lang('Permission Control')); ?></span>

                <div class="card-body">
                    <div class="row">
						<div class="col-md-12">
							<div id="accordion">
								<?php $i = 1; ?>
								<?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="card mb-3">
									<div class="card-header">
										<h4>
											<a class="card-link" data-toggle="collapse"
												href="#collapse-<?php echo e(explode("\\",$key)[3]); ?>">
												<i class="icofont-double-right"></i>
												<?php echo e(str_replace("Controller","",explode("\\",$key)[3])); ?>

											</a>
										</h4>
									</div>
									<div id="collapse-<?php echo e(explode("\\",$key)[3]); ?>" class="collapse">
										<div class="card-body">
											<table class="table">
												<?php $__currentLoopData = $val; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td>
														<div class="checkbox">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input"
																	name="permissions[]" value="<?php echo e($name); ?>"
																	id="customCheck<?php echo e($i + 1); ?>"
																	<?php echo e(array_search($name,$permission_list) !== FALSE ? "checked" : ""); ?>>
																<label class="custom-control-label"
																	for="customCheck<?php echo e($i + 1); ?>"><?php echo e(str_replace("index","list",$name)); ?></label>
															</div>
														</div>
													</td>
												</tr>
												<?php $i++; ?>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</table>
										</div>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</div>
						</div>

                        <div class="col-md-12 mt-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="icofont-check-circled"></i> <?php echo e(_lang('Save Permission')); ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/backend/permission/create.blade.php ENDPATH**/ ?>