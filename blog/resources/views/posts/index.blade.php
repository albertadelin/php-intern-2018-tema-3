@extends ('layouts.master')



@section ('content')

<div class="col-sm-8 blog-main">

@foreach ($posts as $post)

  @include ('posts.post')
  
@endforeach


<nav>
  <ul class="pager">
    <li><a href="#">Previous</a></li>
    <li><a href="#">Next</a></li>
  </ul>
</nav>

</div><!-- /.blog-main -->

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
<div class="sidebar-module sidebar-module-inset">
  <h4>About</h4>
  <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
</div>

@endsection


@section ('foter')

    <script src="/js/file.js"></script>

@endsection