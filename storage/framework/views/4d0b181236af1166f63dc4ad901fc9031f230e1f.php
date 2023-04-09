<?php $__env->startSection('content'); ?>
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white"><?php echo e(_lang('Our Services')); ?></span>
          <h1 class="text-capitalize mb-5 text-lg"><?php echo e(_lang('Our Services')); ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section service-2">
	<div class="container">
		<div class="row">
		<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="service-block mb-5 text-center">
					<?php echo xss_clean($service->icon); ?>

					<div class="content">
						<h4 class="mt-4 mb-2 title-color"><?php echo e($service->translation->title); ?></h4>
						<p class="mb-4"><?php echo e($service->translation->body); ?></p>
					</div>
				</div>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/theme/services.blade.php ENDPATH**/ ?>