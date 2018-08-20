<?php $__env->startSection('content'); ?>

<div class="col-sm-8 blog-main">

	<h2 class="blog-post-title" style="color:#d9534f"><?php echo e($post->title); ?></h2>

    <p class="blog-post-meta"><?php echo e($post->created_at->toFormattedDateString()); ?></p>

    <p><?php echo e($post->body); ?></p>    


    <hr />

    <div class="comments">

    	<ul class="list-group">

    		<?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    		<li class="list-group-item">

    			<strong>
    				<?php echo e($comment->created_at->diffForHumans()); ?>

    			</strong>

    			<?php echo e($comment->body); ?>


    		</li>

    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    	</ul>

    </div>  

    <hr />

    <div class="container">

    		<form method="POST" action="/posts/<?php echo e($post->id); ?>/comments">
                <?php echo e(csrf_field()); ?>

    			<div class="form-group">
    				<textarea name="body" placeholder="Add your comment here" class="form-control"></textarea>
    			</div>

    			<div class="form-group">
    				<button type="submit" class="btn btn-primary">Add Comment</button>
    			</div>

    		</form>

    </div>

</div><!-- /.blog-main -->

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>