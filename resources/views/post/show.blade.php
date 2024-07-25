@extends('layouts.app')

@section('title', 'Show post')

@section('content')

    <div class="post container">


        <div class="post_header row mb-3">
            <div class="col">
                <h1 class="fw-bold">{{ $post->title }}</h1>
            </div>

            <div class="col-auto text-end mt-2">
                <button class="btn border border-1"><i class="fa-solid fa-share"></i>share</button>
                <button class="btn border border-1"><i class="fa-regular fa-heart"></i></button>
                <a href="{{ route('post.edit', $post) }}" class="btn btn-warning text-light"><i
                        class="fa-solid fa-pen-to-square"></i> Edit</a>
                <a href="{{ route('post.delete', $post) }}" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>
                    Delete</a>
            </div>

        </div>

        <div class="post_image mb-4" style="position: relative;">
            <div class="row">
                @foreach ($post->images as $index => $image)
                    @if ($index == 0)
                        <div class="col-md-6" style="height: 480px; padding:10px;">
                            <img src="{{ $image->image }}" class="img-fluid rounded" alt="Post Image"
                                style="height: 100%; width: 100%; object-fit:cover">
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="row">
                            @elseif($index > 0 && $index < 5)
                                <div class="col-md-6" style="height:240px;  padding:10px;">
                                    <img src="{{ $image->image }}" class="img-fluid rounded" alt="Post Image"
                                        style="height: 100%; width: 100%; object-fit:cover">
                                </div>
                    @endif
                @endforeach
            </div>
            @if (count($post->images) > 5)
                <div class="text-center" style="position:absolute; right:3%; bottom:6%;">
                    <a href="" class="btn border border-dark bg-white"><i class="fa-regular fa-images"></i>
                        All Pictures</a>
                </div>
            @endif
        </div>
    </div>
    </a>
    </div>


    <div class="post_content  ">
        <div class="row">
            <div class="col-8">
                <div class="rate border border-1 rounded-2  p-3">
                    <div class="row align-middle">
                        <div class="col my-auto border border-1 border-top-0 border-start-0 border-bottom-0 border-dark">
                            <h3 class="my-auto ms-3"><i class="fa-solid fa-star" style="color: gold"></i> Rating</h3>
                        </div>
                        <div class="col my-auto text-center">
                            <h4 class="my-auto">{{$rate}}</h4>
                        </div>
                        <div class="col my-auto">
                           
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="col text-center border border-1 border-top-0 border-end-0 border-bottom-0 border-dark">
                            <span class="fw-bold h4">{{$num_review}}</span> 
                            <br>
                            <a href="" class="text-dark">Reviews</a>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row px-3 align-items-center">
                    <div class="col-auto  p-0">
                        @if ($post->user->avatar)
                            <div class="">
                                <img src="{{ $post->user->avatar }}" alt="" class=""
                                    style="width: 100px; height:100px;">
                            </div>
                        @else
                            <i class="fa-solid fa-circle-user icon-sm"></i>
                        @endif
                    </div>
                    <div class="col">
                        Host : {{ $post->user->name }}<br>
                        @if ($post->user->text)
                            <span>{{ $post->user->text }}</span>
                        @endif
                    </div>
                </div>


                <hr>

                <div class="post_introduction">
                    {{ $post->description }}
                </div>


                <hr>
            </div>
            <div class="col-4 mt-3">
                <div class="card shadow">
                    <div class="card-body">

                        <h3><span class="fw-bold" id="price">${{ $post->price }}</span>/泊</h3>
                        <form action="{{route('reservation.store')}}" method="post" id="reservation-form">
                            @csrf

                            <div class="mb-3">
                                <div class="form-group mb-3">
                                    <label for="checkin" class="form-label fw-bold m-0">Check In Date</label>
                                    <input type="date" class="form-control" id="checkin" name="checkin"
                                        placeholder="チェックイン日を選択してください">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="checkout" class="form-label fw-bold m-0">Check Out Date</label>
                                    <input type="date" class="form-control" id="checkout" name="checkout"
                                        placeholder="チェックアウト日を選択してください">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="guest" class="form-label fw-bold m-0">Guests</label>
                                    <input type="number" id="guests" name="guests" class="form-control ">
                                    <input type="hidden" value="{{ $post->id }}" name="post_id">
                                    <input type="hidden" value="{{ $post->price }}" name="price">
                                </div>
                            </div>

                            <input type="submit" class="btn w-100 text-white" value="Reserve"
                                style="background-color:#F12A57; font-size:16px;">


                            <div>
                                <div class="row mt-3 mb-3">
                                    <span class="col-auto border-bottom px-0 ms-2" id="stay-duration"
                                        style="font-size:16px;"></span>
                                    <span class="col text-end fw-bold" id="stay-price"></span>
                                </div>
                                <div class="row mb-3">
                                    <span class="col-auto border-bottom px-0 ms-2" id="clean-name"
                                        style="font-size:16px; "></span>
                                    <span class="col text-end fw-bold" id="clean-price"></span>
                                </div>

                                <hr>

                                <div class="row">
                                    <span class="col-auto">Total</span>
                                    <span class="col fw-bold text-end" id="total-price"></span>
                                </div>


                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="post_aminity mt-5">
            <hr>
            <h2 class="mb-3">Aminities and Facilities</h2>
            <div class="row">
                @if ($post->amenityPost->isNotEmpty())
                    @foreach ($post->amenityPost as $amenity_post)
                        <span class="h5 col-6 ">
                            # {{ $amenity_post->amenity->name }}
                        </span>
                    @endforeach
                @else
                    <div class="badge bg-dark">
                        # Uncategorized
                    </div>
                @endif
            </div>
        </div>
        <hr>
        <div class="comment">
            <h1>Reviews</h1>
            <!-- Modal trigger button -->
            <button
                type="button"
                class="btn btn-success btn-lg"
                data-bs-toggle="modal"
                data-bs-target="#reviewModal_{{$post->id}}"
            >
                Please Review
            </button>
            @include('modal.add-review')
            
            
            
            
            
        </div>
    </div>







    </div>
@endsection
