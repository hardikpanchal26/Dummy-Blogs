 <div class="col-sm-3 offset-sm-1 blog-sidebar">
          
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>This is a very basic and simple blogging site made during the process of learning <em>LARAVEL</em> framework.</p>

            <p>
              To get full source code of this project <a href=#>Click here</a>
            </p>
          </div>

          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">

              <?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <li>

                <a href="/posts/?month=<?php echo e($stat->month); ?>&year=<?php echo e($stat->year); ?>" style="color:#d9534f">
                  
                  <?php echo e($stat->month); ?> <?php echo e($stat->year); ?> 

                </a>

              </li>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ol>
            

            <h4>Tags</h4>
            <ol class="list-unstyled">

              <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <li>

                <a href="/posts/tag/<?php echo e($tag); ?>" style="color:#d9534f">
                  
                  <?php echo e($tag); ?>


                </a>

              </li>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ol>

          </div>

         </div><!-- /.blog-sidebar -->