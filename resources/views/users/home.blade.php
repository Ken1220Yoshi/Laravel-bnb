@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-fluid px-5">
  <div class="row">

    @foreach ($all_post as $post )


    <div class="col-3" class="mx-auto">
      <a href="{{route('post.show', $post)}}" class="text-decoration-none text-dark rounded">

        <div class="image-container">
          <div id="carouselExampleIndicators-{{$post->id}}" class="carousel slide image-container">
            <div class="carousel-inner">
              @foreach ($post->images as $image )
              <div class="carousel-item active image-container">
                <img src="{{$image->image}}" class="d-block w-100 image-home " alt="...">
              </div>
              @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators-{{$post->id}}" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators-{{$post->id}}" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>

            <form action="" method="post" class="like-form">
              @csrf
              <button type="submit" class="btn btn-none">
                <i class="fa-regular fa-heart icon-md"></i>
              </button>
            </form>
          </div>
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
          ${{$post->price}}
        </p>
      </a>
    </div>

    @endforeach
  </div>
</div>

@endsection