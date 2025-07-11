@extends('layouts.main')

@section('userprofile')

<section>
    <div class="mybg-blue d-flex justify-content-center">
        <div class="p-5 my-5">
            <h2>Welcome to profile user, {{ auth()->user()->name }}!</h2>
        </div>
    </div>
    <div class="container">
        <div class="d-flex row justify-content-center gap-5 my-5">

            <div class="rounded-circle mx-3 shadow col-lg-2" >
                    <div class="container py-4">
                        <img src="{{ asset('images/user.png') }}" alt="User Image" class="img-fluid rounded-circle">
                    </div>
            </div>

            <div class="card mx-3 shadow col-lg-8" >
                <div class="container mt-4 f-lightblue">
                    <div class="container py-3">
                        <p class="fs-4 fw-bold">User Profile</p>
                        <p class="fs-4"><span class="fw-bold">Name: </span>{{ auth()->user()->name }}</p>
                        <p class="fs-4"><span class="fw-bold">Email: </span>{{ auth()->user()->email }}</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-flex row justify-content-center gap-5 my-5">
            <div class="card mx-3 col-lg-12" >
                <div class="container mt-4 f-lightblue">
                    <div class="container py-3">
                        <p class="fs-4 fw-bold">Your Progress "coming soon"</p>
                        <p class="fs-4"><span class="fw-bold">Completed Modules: "coming soon"</span></p>
                        <p class="fs-4"><span class="fw-bold">Total Modules: "coming soon"</span></p>
                        <p class="fs-4"><span class="fw-bold">Bookmark: "coming soon"</span></p>
                    </div>
                </div>
            </div>
    </div>
</section>
    

@endsection