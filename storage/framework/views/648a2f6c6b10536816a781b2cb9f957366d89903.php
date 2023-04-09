<?php $__env->startSection('content'); ?>
<div class="card">
	<div class="card-header bg-dark text-white text-center">Check Requirements</div>
	<div class="card-body">
	  <?php if(empty($requirements)): ?>
		<div class="text-center">  
		  <h4>Your Server is ready for installation.</h4>
	      <a href="<?php echo e(url('install/database')); ?>" class="btn btn-install">Next</a>
		</div>
      <?php else: ?>
        <?php $__currentLoopData = $requirements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		   <p class="required"><i class="glyphicon glyphicon-info-sign"></i> <?php echo e($r); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	  <?php endif; ?>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('install.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/install/step_1.blade.php ENDPATH**/ ?>