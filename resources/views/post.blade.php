@extends('layouts.main')

 @section('container')
   <div class="container">
     <div class="row mb-5 justify-content-center">
       <div class="col-md-8">
         
         <h1 class="mb-5">{{ $post->title }}</h1>
         
         <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name}}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
         
         <img src="https://source.unsplash.com/random/1200×400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mb-4">
         <article class="my-3 fs-5">
         {!! $post->body !!}
         </article>
         
         <a href="/posts" class="btn btn-primary">Back to posts</a>
       </div>
     </div>
   </div>
   
 @endsection