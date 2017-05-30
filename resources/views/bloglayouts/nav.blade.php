    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/posts">Home</a>
          <a class="nav-link" href="/posts/create">Create New Post</a>
          <a class="nav-link" href="/register">Register</a>
          <a class="nav-link" href="#">New hires</a>
          <a class="nav-link" href="#">About</a>
          @if(Auth::check())
            <a class="nav-link ml-auto" href="#">{{Auth::user()->name}}</a>
          @endif
        </nav>
      </div>
    </div>


