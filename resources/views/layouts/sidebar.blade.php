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

              @foreach ($archives as $stat)

              <li>

                <a href="/posts/?month={{ $stat->month }}&year={{ $stat->year }}" style="color:#d9534f">
                  
                  {{ $stat->month }} {{ $stat->year }} 

                </a>

              </li>

              @endforeach

            </ol>
            

            <h4>Tags</h4>
            <ol class="list-unstyled">

              @foreach ($tags as $tag)

              <li>

                <a href="/posts/tag/{{ $tag }}" style="color:#d9534f">
                  
                  {{ $tag }}

                </a>

              </li>

              @endforeach

            </ol>

          </div>

         </div><!-- /.blog-sidebar -->