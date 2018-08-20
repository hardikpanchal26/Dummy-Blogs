<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/posts">Home</a>
          <a class="nav-link" href="#">New features</a>
          <a class="nav-link" href="#">Press</a>
          <a class="nav-link" href="#">New hires</a>
          <a class="nav-link" href="#">About</a>

          <?php if(Auth::check()): ?>

          <div class="ml-auto" style="position:relative; margin:0.5rem; ">
            
            <a class="btn" style="color:white" href="#"><?php echo e(Auth::user()->name); ?></a>
            
            <a class="btn btn-danger" style="width:10rem;" href="/logout">Logout</a>
          
          </div>


        
          <?php else: ?> 

          <div class="ml-auto" style="position:relative; margin:0.5rem; ">

            <a class="btn btn-danger" style="width:10rem;" href="/register">Register</a>

            <a class="btn btn-danger" style="width:10rem;" href="/login">Login</a>
          
          </div>

          <?php endif; ?>



        </nav>
      </div>
</div>