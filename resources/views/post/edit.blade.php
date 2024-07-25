@extends('layouts.app')

@section('title','Edit Post')

@section('content')
    <div class="container">
        <div class="header text-center w-75 mx-auto">
            <h1 class="text-warning">Edit Information</h1>
            <hr>
        </div>
        <div class="body w-75 mx-auto">
            <form action="{{route('post.update',$post)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row mb-3">
                    <div class="col">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{$post->title}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="row mb-3">
                        <div class="col">
                            <label for="aminities" class="form-label fw-bold">Amenities</label><br>
                            @forelse ($all_amenities as $amenity)
                                <input type="checkbox" class="form-check-inline form-check-input me-0"   name="amenity[]" id="{{$amenity->id}}" value="{{ $amenity->id }}"
                                @forelse ($post->amenityPost as $amenity_post)
                                    @if ($amenity->id === $amenity_post->amenity_id)
                                    checked

                                    @endif
                                @empty
                                @endforelse
                                >
                                <label for="{{$amenity->name}}" class="form-check-label me-2">{{$amenity->name}}</label>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="price" class="form-label fw-bold">Price</label>
                        <div class="col input-group">
                            <span class="input-group-text bg-secondary p-3 text-white border rounded-0">$</span>
                            <input class="input-group-text" type="number" name="price" id="price" value="{{$post->price}}">
                        </div>
                    </div>
                </div>



                <div class="row mb-3">
                    <div class="col">
                        <label for="description" class="form-label fw-bold">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                            placeholder="Description">{{$post->description}}</textarea>
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col">
                        <label for="images" class="form-label fw-bold">Image</label>
                        <div class="row mb-3">
                            @forelse ($post->images as $image)

                                <div class="col-4">
                                    <img src="{{$image->image}}" alt="" width="100%" height="200px">
                                </div>
                            @empty
                            @endforelse
                        </div>
                        <input type="file" class="form-control" id="images" name="images[]" multiple>
                        The acceptable formats are jpeg,jpg,png,and gif only <br>
                        Max file is 1000kb
                    </div>
                </div>


                <input type="submit" name="submit" value="Post" class="btn btn-primary w-25">
            </form>
        </div>
    </div>
@endsection
