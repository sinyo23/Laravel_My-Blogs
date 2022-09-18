@extends('dashboard.layouts.main')

@section('container')
  <div class="container">
     <div class="row mb-5">
       <div class="col-lg-8">
         
         <h1 class="my-3">{{ $post->title }}</h1>
         
         <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back to all Post</a>
         <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
         <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Are you sure??')"><span data-feather="x-circle"></span>Delete</button>
        </form>
         
         <img src="https://source.unsplash.com/random/1200×400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mb-4 mt-3">
         <article class="my-3 fs-5">
         {!! $post->body !!}
         </article>
         
         <a href="/posts" class="btn btn-primary">Back to posts</a>
       </div>
     </div>
   </div>
@endsection