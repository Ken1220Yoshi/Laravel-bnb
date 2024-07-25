@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="container">
  <div class="row mt-5">
    <div class="col-xl-4 col-12">
      <div class="icon-box">
        @if (Auth::user()->avatar)
        <img src="{{Auth::user()->avatar}}" alt="#" class="rounded-circle avatar-profile-lg border">
        @else
        <i class="fa-solid fa-circle-user icon-profile-lg text-muted"></i>
        @endif
        <form action="" method="post" enctype="multipart/form-data">
          <button type="file" class="border px-3 bg-white edit-btn-profile"><i class="fa-solid fa-camera"></i> Edit</button>
        </form>
      </div>

      @if (Auth::user()->avatar)
      <img src="{{Auth::user()->avatar}}" alt="#" class="rounded-circle avatar-lg">
      @else
      <i class="fa-solid fa-circle-user icon-profile-lg"></i>
      @endif
    </div>

    <div class="col-xl-8 col-12">
      <h1 class="fw-bold">
        Your Profile

        </h2>
        <p class="mt-3 text-muted h4">
          The information you share will be used across Laravel-bnb to help other guests and Hosts get to know you.
        </p>
        <div class="row text-justify-center">
          <div class="col list-group mt-4">
            <a href="" class="group-item-list text-decoration-none text-muted h3 border-bottom ps-2 flex-center rounded mb-0" style="height: 10vh;"><i class="fa-solid fa-graduation-cap me-3"></i> Where I went to school</a>
            <a href="" class="group-item-list text-decoration-none text-muted h3 border-bottom ps-2 flex-center rounded mb-0 " style="height: 10vh;"><i class="fa-solid fa-earth-americas me-3"></i> Where live</a>
            <a href="" class="group-item-list text-decoration-none text-muted h3 border-bottom ps-2 flex-center rounded mb-0" style="height: 10vh;"><i class="fa-regular fa-calendar me-3"></i> Decade I was born</a>
            <a href="" class="group-item-list text-decoration-none text-muted h3 border-bottom ps-2 flex-center rounded mb-0" style="height: 10vh;"><i class="fa-regular fa-heart me-3"></i> I'm obsessed with</a>
            <a href="" class="group-item-list text-decoration-none text-muted h3 border-bottom ps-2 flex-center rounded mb-0" style="height: 10vh;"><i class="fa-solid fa-pen me-3"></i> My most unless skill</a>
            <a href="" class="group-item-list text-decoration-none text-muted h3 border-bottom ps-2 flex-center rounded mb-0" style="height: 10vh;"><i class="fa-regular fa-clock me-3"></i> I spend too much time</a>
          </div>
          <div class="col list-group mt-4">
            <a href="" class="group-item-list text-decoration-none text-muted h3 border-bottom ps-2 flex-center rounded mb-0" style="height: 10vh;"><i class="fa-solid fa-briefcase me-3"></i> My work</a>
            <a href="" class="group-item-list text-decoration-none text-muted h3 border-bottom ps-2 flex-center rounded mb-0" style="height: 10vh;"><i class="fa-solid fa-globe me-3"></i> Languages I speak</a>
            <a href="" class="group-item-list text-decoration-none text-muted h3 border-bottom ps-2 flex-center rounded mb-0" style="height: 10vh;"><i class="fa-solid fa-music me-3"></i> My favorite song in high school</a>
            <a href="" class="group-item-list text-decoration-none text-muted h3 border-bottom ps-2 flex-center rounded mb-0" style="height: 10vh;"><i class="fa-regular fa-lightbulb me-3"></i> My fun fact</a>
            <a href="" class="group-item-list text-decoration-none text-muted h3 border-bottom ps-2 flex-center rounded mb-0" style="height: 10vh;"><i class="fa-solid fa-book-open-reader me-3"></i> My biography title would be</a>
            <a href="" class="group-item-list text-decoration-none text-muted h3 border-bottom ps-2 flex-center rounded mb-0" style="height: 10vh;"><i class="fa-solid fa-paw me-3"></i> Pets</a>
          </div>


        </div>
        <h1 class="fw-bold my-4">About you</h1>
        <div class="about-you rounded">
          <p class="h4 text-muted my-3 ms-3">
            Write something fun and punchy.
          </p>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-lg text-decoration-underline h4" data-bs-toggle="modal" data-bs-target="#aboutYouModal">
            Add intro
          </button>

          <!-- Modal -->
          <div class="modal fade" id="aboutYouModal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header border-0">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <h1 class="fw-bold">
                      About you
                    </h1>
                    <h3 class="text-muted mb-5">
                      Tell us a little bit about yourself, so your future hosts or guests can get to know you.
                    </h3>
                    <form action="{{route('user.update', Auth::user())}}" method="post" class="w-100">
                      @csrf
                      @method('PATCH')
                      <textarea name="intro" id="intro" class="w-100 rounded" rows="10">{{Auth::user()->text}}</textarea>

                  </div>
                </div>
                <div class="modal-footer">

                  <button type="submit" class="btn btn-dark btn-lg">Save</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <script>
            var modalId = document.getElementById('modalId');

            modalId.addEventListener('show.bs.modal', function(event) {
              // Button that triggered the modal
              let button = event.relatedTarget;
              // Extract info from data-bs-* attributes
              let recipient = button.getAttribute('data-bs-whatever');

              // Use above variables to manipulate the DOM
            });
          </script>

        </div>

        <hr class="mt-5">

        <h1 class="fw-bold">More information</h1>
        <div class="more-you rounded">
          <p class="h4 text-muted my-3 ms-3">
            You can edit your information here.
          </p>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-lg text-decoration-underline h4" data-bs-toggle="modal" data-bs-target="#moreYouModal">
            Edit
          </button>

          <!-- Modal -->
          <div class="modal fade" id="moreYouModal" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header border-0">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <h1 class="fw-bold">
                      Edit Information
                    </h1>
                    <h3 class="text-muted mb-5">
                      Edit your name, email, and any other information you'd like to change.
                    </h3>
                    <form action="{{route('user.update', Auth::user())}}" method="post" class="w-100">
                      @csrf
                      @method('PATCH')
                      <label for="" class="form-label">User Name</label>
                      <input type="text" name="name" id="name" class="form-control mb-3" value="{{Auth::user()->name}}" >
                      <label for="" class="form-label">Email</label>
                      <input type="email" name="email" id="email" class="form-control mb-3" value="{{Auth::user()->email}}" >
                      <label for="" class="form-label">Avatar</label>
                      <input type="file" name="avatar" id="avatar" class="form-control mb-3">
                  
                      


                  </div>
                </div>
                <div class="modal-footer">

                  <button type="submit" class="btn btn-dark btn-lg">Save</button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <script>
            var modalId = document.getElementById('modalId');

            modalId.addEventListener('show.bs.modal', function(event) {
              // Button that triggered the modal
              let button = event.relatedTarget;
              // Extract info from data-bs-* attributes
              let recipient = button.getAttribute('data-bs-whatever');

              // Use above variables to manipulate the DOM
            });
          </script>

        </div>

    </div>
  </div>


      </h2>
      <p class="mt-3 text-muted h4">
      The information you share will be used across Laravel-bnb to help other guests and Hosts get to know you.
      </p>
      <div class="row border">
        <div class="col list-group border">
          <a href="" class="group-item-list">Where I went to school</a>
          <a href="" class="group-item-list">Where live</a>
          <a href="" class="group-item-list"></a>
          <a href="" class="group-item-list"></a>
          <a href="" class="group-item-list"></a>
          <a href="" class="group-item-list"></a>
        </div>
        <div class="col"></div>
      </div>

    </div>
  </div>

</div>
@endsection