@extends('layouts.app')

@section('title', 'Create post')

@section('content')


    <div class="container">


        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <label for="title" class="form-label fw-bold">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="What's post title">
                </div>

            </div>




            <div class="row mb-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="aminities" class="form-label fw-bold">Amenities</label><br>
                        @foreach ($all_amenities as $amenity)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="aminity{{ $amenity->id }}"
                                    name="amenity[]" value="{{ $amenity->id }}">
                                <label class="form-check-label"
                                    for="aminity{{ $amenity->id }}">{{ $amenity->name }}</label>
                            </div>
                        @endforeach
                    </div>
=======
<div class="container">


  <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="row mb-3">
          <div class="col">
            <label for="title" class="form-label fw-bold">Title</label>
            <input type="text" name="title" class="form-control" placeholder="What's post title">
            </div>

          </div>


        </div>


        <div class="row mb-3">
          <div class="row mb-3">
                <div class="col">

                    <label for="aminities" class="form-label fw-bold">Amenities</label><br>
                    @foreach ($all_amenities as $amenity)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="aminity{{ $amenity->id }}"
                                name="amenity[]" value="{{ $amenity->id }}">
                            <label class="form-check-label" for="aminity{{ $amenity->id }}">{{ $amenity->name }}</label>
                        </div>
                    @endforeach
>>>>>>> 6f4b48ebda44c870d3e57d35dc91f05df093b744
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="price" class="form-label fw-bold">Price</label>
                    <div class="col input-group">
                        <span class="input-group-text bg-secondary p-3 text-white border rounded-0">$</span>
                        <input class="input-group-text" type="number" name="price" id="price">
                    </div>
                </div>
            </div>



<<<<<<< HEAD
            <div class="row mb-3">
                <div class="col">
                    <label for="description" class="form-label fw-bold">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                        placeholder="Description"></textarea>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col">
                    <label for="images" class="form-label fw-bold">Image</label>
                    <input type="file" class="form-control" id="images" name="images[]" multiple>
                    The acceptable formats are jpeg,jpg,png,and gif only <br>
                    Max file is 1000kb
                </div>
            </div>
=======
        <div class="row mb-3">
            <div class="col">
                <label for="description" class="form-label fw-bold">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                    placeholder="Description"></textarea>
                  </div>
        </div>


        <div class="row mb-3">
          <div class="col">
            <label for="images" class="form-label fw-bold">Image</label>
            <input type="file" class="form-control" id="images" name="images[]" multiple>
              The acceptable formats are jpeg,jpg,png,and gif only <br>
              Max file is 1000kb
          </div>
      </div>


      <input type="submit" name="submit" value="Post" class="btn btn-primary w-25">
>>>>>>> 6f4b48ebda44c870d3e57d35dc91f05df093b744


            <input type="submit" name="submit" value="Post" class="btn btn-primary w-25">


        </form>

    </div>
@endsection
