@extends('layouts.app')

@section('title', 'Show post')

@section('content')

    <div class="post">


        <div class="post_header row">
            <div class="col-auto">
                <h1>Post Title</h1>
            </div>
            <div class="col d-flex">
                <button><i class="fa-solid fa-share"></i>シェア</button>
                <button><i class="fa-regular fa-heart"></i>保存</button>
            </div>
        </div>

        <div class="post_image">
            imageが入ります。
        </div>


        <div class="post_content">
            <div class="row">
                <div class="col-8">

                    <hr>

                    <div class="row">
                        <div class="col-auto">
                            host image
                        </div>
                        <div class="col">
                            ホスト : Pulinoさん<br>
                            <span>ユーザー・イントロダクション</span>
                        </div>
                    </div>


                    <hr>

                    <div class="post_introduction">
                      post_introduction
                    </div>

                    <hr>
                </div>
                <div class="col-4">
                  <div class="card">
                    <div class="card-body">
                      price
                    </div>
                  </div>
                </div>
            </div>
        </div>







    </div>

@endsection
