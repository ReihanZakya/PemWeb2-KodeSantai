@extends('layouts.main')

@section('module')
<div class="mybg-blue pb-3">
    <div class="container py-5">
        <div class="myBorder-leftWhite p-2 my-5">
            <h1 class="fw-bold">Modul untuk Kategori: {{ $category->name }}</h1>
        </div>
        <div class="row">
            @foreach ($modules as $module)
                <div class="col-lg-3 d-flex justify-content-center">
                    <a href="{{ route('material.byModule', $module->id) }}" class="btn myBtn-white fw-bold w-100 text-decoration-none text-dark">
                        {{ $module->title }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
