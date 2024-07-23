@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-fluid px-5">
  <div class="row">
    <div class="col" class="mx-auto">
      <a href="" class="text-decoration-none text-dark rounded">
        <div class="image-container">
          <img src="https://images.pexels.com/photos/259588/pexels-photo-259588.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" class="image-home">
          <form action="" method="post" class="like-form">
            @csrf
            <button type="submit" class="btn btn-none">
              <i class="fa-regular fa-heart icon-md"></i>
            </button>
          </form>


        </div>


        <div class="row mt-3">
          <div class="col-9">
            <p class="h4 fw-bold">places</p>
          </div>
          <div class="col">rate</div>
        </div>
        <p class="h4">
          date
        </p>

        <p class="h4">
          price
        </p>

      </a>

    </div>
    <div class="col" class="mx-auto">
      <a href="" class="text-decoration-none text-dark">
        <img src="https://images.pexels.com/photos/259588/pexels-photo-259588.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" class="image-home">
        <div class="row">
          <div class="col-9">
            <p class="h4 fw-bold">place</p>
          </div>
          <div class="col">rate</div>
        </div>
        <p class="h4">
          date
        </p>
        <p class="h4">
          price
        </p>

      </a>

    </div>
    <div class="col" class="mx-auto">
      <a href="" class="text-decoration-none text-dark">
        <img src="https://images.pexels.com/photos/259588/pexels-photo-259588.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" class="image-home">
        <div class="row">
          <div class="col-9">
            <p class="h4 fw-bold">place</p>
          </div>
          <div class="col">rate</div>
        </div>
        <p class="h4">
          date
        </p>
        <p class="h4">
          price
        </p>

      </a>

    </div>
    <div class="col" class="mx-auto">
      <a href="" class="text-decoration-none text-dark">
        <img src="https://images.pexels.com/photos/259588/pexels-photo-259588.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="" class="image-home">
        <div class="row">
          <div class="col-9">
            <p class="h4 fw-bold">place</p>
          </div>
          <div class="col">rate</div>
        </div>
        <p class="h4">
          date
        </p>
        <p class="h4">
          price
        </p>

      </a>

    </div>
  </div>
</div>

@endsection