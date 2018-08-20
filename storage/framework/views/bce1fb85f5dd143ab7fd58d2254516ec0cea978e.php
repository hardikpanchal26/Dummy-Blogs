	


	<?php $__env->startSection('content'); ?>


    <div class="col-sm-8 blog-main">
    
      <?php if(Auth::check()): ?>

          <div class="m-3">

            <a class="btn btn-secondary" style="width:100%;" href="/posts/create">Create a Post</a>
    
          </div>

      <?php endif; ?>

      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php echo $__env->make('posts.post', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>     

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
          <nav class="blog-pagination">
            <a class="btn btn-outline-danger" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

    </div><!-- /.blog-main -->

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>