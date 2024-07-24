@extends('layouts.app')

@section('title', 'Show post')

@section('content')

    <div class="post container border border-1">


        <div class="post_header row mb-3">
            <div class="col">
                <h1 class="fw-bold">{{ $post->title }}</h1>
            </div>
            <div class="col-auto d-flex p-0">
                <button class="btn border border-1"><i class="fa-solid fa-share"></i>シェア</button>
                <button class="btn border border-1 ms-2"><i class="fa-regular fa-heart"></i>保存</button>
            </div>

            <div class="col text-end mt-2">
                <a href="{{route('post.edit',$post)}}" class="btn btn-warning text-light"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                <a href="{{route('post.delete',$post)}}" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Delete</a>
            </div>

        </div>

        <div class="post_image mb-4" style="position: relative;">
            <div class="row">
                @foreach ($post->images as $index => $image)
                    @if ($index == 0)
                        <div class="col-md-6 border border-danger" style="height: 480px; padding:10px;">
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
                        全ての写真を表示</a>
                </div>
            @endif
        </div>
    </div>
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
                        <h3><span class="fw-bold" id="price">${{ $post->price }}</span>/泊</h3>
                        <form action="" method="" id="reservation-form">
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="checkin">チェックイン日</label>
                                    <input type="date" class="form-control" id="checkin" name="checkin"
                                        placeholder="チェックイン日を選択してください">
                                </div>
                                <div class="form-group">
                                    <label for="checkout">チェックアウト日</label>
                                    <input type="date" class="form-control" id="checkout" name="checkout"
                                        placeholder="チェックアウト日を選択してください">
                                </div>
                                <div class="form-group">
                                  <label for="guest" class="form-label fw-bold m-0">人数</label>
                                  <input type="number" id="guests" name="guests" class="form-control ">
                                  <input type="hidden" value="{{$post->id}}" name="post_id">
                                  <input type="hidden" value="{{$post->price}}" name="price">
                                </div>
                            </div>

                            <input type="submit" class="btn w-100 text-white" value="予約する"
                                style="background-color:#F12A57; font-size:16px;">

                            <span class="d-block my-3 text-center" style="opacity: 0.8;">まだ請求されません</span>

                            <div>
                              <div class="row mb-3">
                                <span class="col" id="stay-duration"></span>
                                <span class="col-auto" id="stay-price"></span>
                              </div>
                              <div class="row mb-3">
                                <span class="col" id="clean-name"></span>
                                <span class="col-auto" id="clean-price"></span>
                              </div>

                              <hr>

                              <div>
                                <span class="col">合計(税抜き)</span>
                                <span class="col-auto" id="total-price"></span>
                              </div>

                              
                          </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="post_aminity mt-5">
            <hr>
            <h2 class="mb-3">提供されるアミニティ・設備{{ $post->id }}</h2>
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
