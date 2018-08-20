<div class="blog-post sidebar-module-inset" >

	<h2 class="blog-post-title">
    	
    	<a href="posts/{{ $post->id }}" style="color:#d9534f">
            
       		{{ $post->title }}
    
    	</a>
	
	</h2>

    

    <p class="blog-post-meta ">

    	{{ $post->user->name }} on

    	{{ $post->created_at->toFormattedDateString() }}
       
    </p>

    <div>

         @foreach ($post->tags as $tag)

        <span class="badge badge-danger">{{ $tag->name }}</span>

        @endforeach

    </div>

        {{ $post->body }}  
</div><!-- /.blog-post -->
