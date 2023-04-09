<?php $__env->startSection('content'); ?>

<div class="card">
	<div class="card-header bg-dark text-white text-center">Database Settings</div>
	<div class="card-body">
	   <div class="col-md-12">
			<?php if(\Session::has('error')): ?>
			  <div class="alert alert-danger">
				<p><?php echo e(\Session::get('error')); ?></p>
			  </div>
			  <br />
			<?php endif; ?>
		   <form action="<?php echo e(url('install/process_install')); ?>" method="post" autocomplete="off">
			   <?php echo e(csrf_field()); ?>

			  <div class="form-group">
				<label>Hostname:</label>
				<input type="text" class="form-control" value="localhost" name="hostname" id="hostname">
			  </div>
			  
			  <div class="form-group">
				<label>Database:</label>
				<input type="text" class="form-control" name="database" id="database">
			  </div>
			  
			  <div class="form-group">
				<label>Username:</label>
				<input type="text" class="form-control" name="username" id="username">
			  </div>
			  
			  <div class="form-group">
				<label>Password:</label>
				<input type="password" class="form-control" name="password">
			  </div>
			  <button type="submit" id="next-button" class="btn btn-install">Next</button>
		   </form>
	   </div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js-script'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#next-button').attr('disabled', true);

            $('#hostname, #username, #database').keyup(function() {
                inputCheck();
            });
        });

        function inputCheck() {
            hostname = $('#hostname').val();
            username = $('#username').val();
            database = $('#database').val();

            if (hostname != '' && username != '' && database != '') {
                $('#next-button').attr('disabled', false);
            } else {
                $('#next-button').attr('disabled', true);
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('install.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/k3lobc2fo9t4/blockchain/resources/views/install/step_2.blade.php ENDPATH**/ ?>