<?php $__env->startSection('content'); ?>
<div class="card">
	<div class="card-header bg-dark text-white text-center">Login Details</div>
	<div class="card-body">
	   <div class="col-md-12">
	        <?php if($errors->any()): ?>
				<div class="alert alert-danger alert-dismissible">
			        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					   <p><?php echo e($error); ?></p>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			<?php endif; ?>
		    <form action="<?php echo e(url('install/store_user')); ?>" method="post" autocomplete="off">
			    <?php echo e(csrf_field()); ?>

				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required>				
				</div>
				
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>	
				</div>
				
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" required>
				</div>
			    <button type="submit" id="next-button" class="btn btn-install">Next</button>
		    </form>
	   </div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('install.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/install/step_3.blade.php ENDPATH**/ ?>