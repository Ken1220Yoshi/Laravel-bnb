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
                            <h3>Price/泊</h3>
                            <form action="" method="">
                                <div class="">
                                    <label for="guest" class="form-label fw-bold">人数</label>
                                    <input type="number" name="guest" class="form-control ">
                                </div>

                                <input type="submit" class="btn btn-warning" value="予約する">
                                <span>まだ請求されません</span>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="post_aminity">
              <h2>提供されるアミニティ・設備</h2>
              <div class="post_aminity-content d-grid">
                
              </div>
            </div>
        </div>







    </div>

@endsection
