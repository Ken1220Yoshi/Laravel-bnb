@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="container">
  <div class="row mt-5">
    <div class="col-xl-4 col-12">
      @if (Auth::user()->avatar)
      <img src="{{Auth::user()->avatar}}" alt="#" class="rounded-circle avatar-lg">
      @else
      <i class="fa-solid fa-circle-user icon-profile-lg"></i>
      @endif
    </div>

    <div class="col-xl-8 col-12">
      <h1 class="fw-bold">
        Your Profile
      </h2>
      <p class="mt-3 text-muted h4">
      The information you share will be used across Laravel-bnb to help other guests and Hosts get to know you.
      </p>
      <div class="row border">
        <div class="col list-group border">
          <a href="" class="group-item-list">Where I went to school</a>
          <a href="" class="group-item-list">Where live</a>
          <a href="" class="group-item-list"></a>
          <a href="" class="group-item-list"></a>
          <a href="" class="group-item-list"></a>
          <a href="" class="group-item-list"></a>
        </div>
        <div class="col"></div>
      </div>

    </div>
  </div>
</div>
@endsection