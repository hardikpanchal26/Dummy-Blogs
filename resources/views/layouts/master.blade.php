
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Blog Template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    
    <link href="/css/blog.css" rel="stylesheet">
    
  </head>

  <body>
    
    <div align="center" class="pt-3 pb-3" style="background-color:#d9534f; width:100%">
        
      <h1 class="blog-title" style="color:#000000">Dummy Blogs</h1>
      
    </div>
    
    @include('layouts.nav')

    @if ($flash = session('message'))

      <div class="alert alert-success ml-3 mr-3">

        {{ $flash }}

      </div>

    @endif

    <div class="container">

      @if ($flash = session('post'))

      <div class="alert alert-success ml-3 mr-3">

        {{ $flash }}

      </div>

      @endif

      <div class="row">

        @yield('content')

       @include('layouts.sidebar')

      </div><!-- /.row -->
    </div><!-- /.container -->

    @include('layouts.footer')

  </body>
</html>

