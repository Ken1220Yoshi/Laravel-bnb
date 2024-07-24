<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Amenity;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    private $post;

    public function __construct(Post $post){
        $this->post = $post;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return view('users.home');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $all_amenities = Amenity::latest()->get();
        return view('post.create')->with('all_amenities',$all_amenities);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->post->title = $request->title;
        $this->post->price = $request->price;
        $this->post->user_id = Auth::id();
        $this->post->description = $request->description;
        $this->post->save();

        $amenity_post = [];

        foreach($request->amenity as $amenity_id):
            $amenity_post[] = ["amenity_id" => $amenity_id];
        endforeach;

        $this->post->amenityPost()->createMany($amenity_post);

        // imageテーブルに保存
        $images = [];
        if($request->hasFile('images')){
            foreach($request->file('images') as $image):
                $image = 'data:image/'.$image->extension().';base64,'.base64_encode(file_get_contents($image));
                $images[] = ['image' => $image];
            endforeach;

            $this->post->images()->createMany($images);
        }

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        return view('post.show')->with('post',$post);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        $all_amenities = Amenity::latest()->get();
        return view('post.edit')->with('post',$post)
                                ->with('all_amenities',$all_amenities);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
        $post->title = $request->title;
        $post->price = $request->price;
        $post->description = $request->description;
        

        // imageテーブルに保存
        $images = [];
        if($request->hasFile('images')){
            $post->images()->delete();
            foreach($request->file('images') as $image):
                $image = 'data:image/'.$image->extension().';base64,'.base64_encode(file_get_contents($image));
                $images[] = ['image' => $image];
            endforeach;

            $post->images()->createMany($images);
        }

        $post->save();

        $post->amenityPost()->delete();
        $amenity_post = [];

        foreach($request->amenity as $amenity_id):
            $amenity_post[] = ["amenity_id" => $amenity_id];
        endforeach;

        $post->amenityPost()->createMany($amenity_post);

        return redirect()->route('post.show',$post);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
