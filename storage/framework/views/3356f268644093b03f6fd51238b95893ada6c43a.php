<?php $__env->startSection('content'); ?>
	
	<div class="col-sm-8">
		<h1>Sign In</h1>

		<div class="form-group">
			<?php echo $__env->make('layouts.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>

		<form method="POST" action="/login">

			<?php echo e(csrf_field()); ?>


			<div class="form-group">

				<label for="email">Email: </label>
				<input type="email" class="form-control" id="email" name="email" />
				
			</div>

			<div class="form-group">

				<label for="password">Password: </label>
				<input type="password" class="form-control" id="password" name="password" />
				
			</div>

			<div class="form-group">

				<input type="submit" class="btn btn-primary" value="Sign In"/>
				
			</div>

		</form>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>