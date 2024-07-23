@extends('layouts.app')

@section('title', 'Create post')

@section('content')

    <form action="" method="" enctype="multipart/form-data">

        <div class="row mb-3">
            <div class="col">
                <label for="title" class="form-label fw-bold">Title</label>
                <input type="text" name="title" class="form-control" placeholder="What's post title">
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="row mb-3">
                <div class="col">
                    <label for="aminities" class="form-label fw-bold">Aminities</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="aminity" name="aminities[]" value="">
                        <label class="form-check-label" for="aminity">Aminity Name</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="price" class="form-label fw-bold">Price</label>
                <input type="number" name="price" class="form-control">
            </div>
        </div>



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
              Max file is 1048kb.
          </div>
      </div>


      <input type="submit" name="submit" value="Post" class="btn btn-primary w-25">


    </form>

@endsection
