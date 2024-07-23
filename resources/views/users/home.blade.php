@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-fluid px-5">
  <div class="row">

  @foreach ($all_post as $post )
    
  
    <div class="col-3" class="mx-auto">
      <a href="" class="text-decoration-none text-dark rounded">
        <div class="image-container">
          <img src="{{$post->image}}" alt="" class="image-home">
          <i class="fa-solid fa-circle-chevron-right icon-img"></i>
          <form action="" method="post" class="like-form">
            @csrf
            <button type="submit" class="btn btn-none">
              <i class="fa-regular fa-heart icon-md"></i>
            </button>
          </form>
        </div>


        <div class="row mt-3">
          <div class="col-9">
            <p class="h4 fw-bold">{{$post->title}}</p>
          </div>
          <div class="col">rate</div>
        </div>

        <p class="h4">
          date
        </p>
        <p class="h4">
          {{$post->price}}
        </p>
      </a>
    </div>

    @endforeach
  </div>
</div>

@endsection