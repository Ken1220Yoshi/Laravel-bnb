@extends('layouts.app')

@section('title','Delete Post')
    
@section('content')
    <div class="card w-50 mx-auto border-3 border-danger">
        <div class="card-body text-center">
            <h3 class="text-danger"><i class="fa-solid fa-triangle-exclamation"></i> Delete</h3>
            <p>Are you sure you want to delete this post?</p>
            <p>Post Title : {{$post->title}}</p>
            <form action="{{route('post.destroy',$post)}}" method="post">
                @csrf
                @method('DELETE')
                <div class="row">
                    <div class="col text-end">
                        <a href="{{route('post.show',$post)}}" class="btn btn-outline-danger w-50">Cancel</a>
                    </div>
                    <div class="col text-start">
                        <button type="submit" class="btn btn-danger w-50">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection