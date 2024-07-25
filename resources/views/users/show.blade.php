@extends('layouts.app')

@section('title', 'Show User')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-xl-4 col-12">
      <div class="card text-center bg-white shadow border-0 profile-card mt-5">

        <div class="card-body row">
          <div class="col-8">
            @if (Auth::user()->avatar)
            <img src="{{Auth::user()->avatar}}" alt="#" class="rounded-circle avatar-sm">
            @else
            <i class="fa-solid fa-circle-user icon-profile-md"></i>
            @endif

            <div class="h3 fw-bold">{{$user->name}}</div>
            @if ($user->role_id == 1)
            <p>Guest</p>
            @else
            <p>Host</p>
            @endif
          </div>
          <div class="col-4 my-auto">
            <p class="text-small mb-0">Registered in</p>
            <p class="fa-3x fw-bold mt-0">{{$user->created_at->Format('Y')}}</p>
          </div>
        </div>
      </div>

      

      <div class="user-information border card mt-5">
        <div class="card-body">
          <p class="h2 fw-bold text-center mb-5">
          {{$user->name}} confirmed information
        </p>
        <p class="h3 ms-2 mt-4">
        <i class="fa-solid fa-check"></i> Identity
        </p>
        <p class="h3 ms-2 mt-4 mb-4">
        <i class="fa-solid fa-check"></i> Phone-number
        </p>
        <a href="" class="h4 text-dark ms-2 mt-5">Learn about identity verification</a>
        </div>
        
      </div>

    </div>

    <div class="col-xl-8 col-12">
      <div class="mx-auto text-justify-center w-75 create-profile">
        <hr class="w-75 mx-auto">
      <div class="mt-5 w-75 mx-auto">
        <p class="fw-bold h2">It's time to create your profile</p>
        <p class="text-muted h5 mb-5">
        Your Laravel-bnb profile is an important part of every reservation. Create yours to help other Hosts and guests get to know you.
        </p>
        <a href="{{route('user.create', $user)}}" class="btn btn-danger btn-lg">Create profile</a>
</div>
      </div>
      
    </div>

  </div>
</div>
@endsection