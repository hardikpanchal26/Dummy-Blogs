<?php $__env->startSection('content'); ?>
	
	<div class="col-sm-8">
		<h1>Register</h1>

		<div class="form-group">
			<?php echo $__env->make('layouts.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>

		<form method="POST" action="/register">

			<?php echo e(csrf_field()); ?>


			<div class="form-group">

				<label for="name">Name: </label>
				<input type="text" class="form-control" id="name" name="name" />

			</div>

			<div class="form-group">

				<label for="email">Email: </label>
				<input type="text" class="form-control" id="email" name="email" />
				
			</div>

			<div class="form-group">

				<label for="password">Password: </label>
				<input type="password" class="form-control" id="password" name="password" />
				
			</div>


			<div class="form-group">

				<label for="password_confirmation">Password Confirmation: </label>
				<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" />
				
			</div>

			<div class="form-group">

				<input type="submit" class="btn btn-primary" value="Register"/>
				
			</div>

		</form>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>