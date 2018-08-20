
	@extends('layouts.master')


	@section('content')


    <div class="col-sm-8 blog-main">
    
      @if (Auth::check())

          <div class="m-3">

            <a class="btn btn-secondary" style="width:100%;" href="/posts/create">Create a Post</a>
    
          </div>

      @endif

      @foreach ($posts as $post)

        @include('posts.post')     

      @endforeach
      
          <nav class="blog-pagination">
            <a class="btn btn-outline-danger" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

    </div><!-- /.blog-main -->

	@endsection