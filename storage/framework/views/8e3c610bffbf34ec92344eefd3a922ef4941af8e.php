<div class="blog-post sidebar-module-inset" >

	<h2 class="blog-post-title">
    	
    	<a href="posts/<?php echo e($post->id); ?>" style="color:#d9534f">
            
       		<?php echo e($post->title); ?>

    
    	</a>
	
	</h2>

    

    <p class="blog-post-meta ">

    	<?php echo e($post->user->name); ?> on

    	<?php echo e($post->created_at->toFormattedDateString()); ?>

       
    </p>

    <div>

         <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <span class="badge badge-danger"><?php echo e($tag->name); ?></span>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

        <?php echo e($post->body); ?>  
</div><!-- /.blog-post -->
