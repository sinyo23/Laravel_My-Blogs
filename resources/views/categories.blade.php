@extends('layouts.main')

 @section('container')
   <h1 class="mb-5 text-center"><strong>{{ $title }}</strong></h1>
   
   <div class="container">
     <div class="row">
       @foreach ($categories as $category)
       <div class="col-md-4">
           <div class="card text-white bg-dark">
            <img src="https://source.unsplash.com/random/500x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
            <div class="card-img-overlay d-flex align-items-center p-0">
              <h5 class="card-title text-center flex-fill fs-3 p-4" style="background-color: rgba(0,0,0,0.7)"><a href="/posts?category={{ $category->slug }}" class="text-decoration-none text-white">{{ $category->name }}</a></h5>
            </div>
          </div>
        </a>
       </div>
       @endforeach
     </div>
   </div>
   
 @endsection