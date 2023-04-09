<?php $__env->startSection('content'); ?>
<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
			<span class="text-white"><?php echo e(_lang('FAQ')); ?></span>
            <h1 class="text-capitalize mb-5 text-lg"><?php echo e(_lang('Frequently Asked Questions')); ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section service-2">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 offset-lg-2">
            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="faq-item">
               <h3>
                  <a class="faq-question collapsed" data-toggle="collapse" href="#faq-<?php echo e($faq->id); ?>" role="button" aria-expanded="false" aria-controls="faq-1">
                  <?php echo e($faq->translation->question); ?>

                  </a>
               </h3>
               <div class="collapse" id="faq-<?php echo e($faq->id); ?>">
                  <div class="faq-content">
                  <?php echo e($faq->translation->answer); ?>

                  </div>
               </div>
            </div>
            <hr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
      </div>
   </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/theme/faq.blade.php ENDPATH**/ ?>