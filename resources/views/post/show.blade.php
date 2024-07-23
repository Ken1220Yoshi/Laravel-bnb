@extends('layouts.app')

@section('title', 'Show post')

@section('content')

    <div class="post container border border-1">


        <div class="post_header row mb-3">
            <div class="col-auto">
                <h1 class="fw-bold">{{ $post->title }}</h1>
            </div>
            <div class="col d-flex">
                <button class="btn border border-1"><i class="fa-solid fa-share"></i>シェア</button>
                <button class="btn border border-1 ms-2"><i class="fa-regular fa-heart"></i>保存</button>
            </div>
        </div>

        <div class="post_image p-0 mb-4" >
          <a href="">
            @foreach($post->images as $image)
            <img src="{{ $image->image }}" alt="Post Image" style="max-width: 600px; height:100%; border-radius: 50px" >
            @endforeach
          </a>
        </div>


        <div class="post_content border border-1 ">
            <div class="row">
                <div class="col-8">
                    <hr>

                    <div class="row px-3 align-items-center">
                        <div class="col-auto border border-1 p-0">
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
                            ホスト : {{ $post->user->name }}さん<br>
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
                    <div class="card">
                        <div class="card-body">
                            <h3><span class="fw-bold">${{$post->price}}</span>/泊</h3>
                            <form action="" method="">
                                <div class="mb-3">
                                    <label for="guest" class="form-label fw-bold m-0">人数</label>
                                    <input type="number" name="guest" class="form-control ">
                                </div>

                                <input type="submit" class="btn w-100 text-white" value="予約する" style="background-color:#F12A57; font-size:16px;">

                                <span class="d-block mt-3 text-center" style="opacity: 0.8;">まだ請求されません</span>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="post_aminity mt-5">
                <h2>提供されるアミニティ・設備{{ $post->id }}</h2>
                <div class="row">
                  @if ($post->amenityPost->isNotEmpty())
                      @foreach ($post->amenityPost as $amenity_post)
                          <span class="h5 col-6 border border-1">
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
        </div>







    </div>

@endsection
