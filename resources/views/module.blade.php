@extends('layouts.main')

@section('module')
    <section>
        <div class="mybg-blue d-flex justify-content-center">
            <div class="p-5 my-5">
                <h2>Pilih Modul Yang Ingin Kamu Pelajari</h2>
            </div>
        </div>
        <div class="container">
            <div class="row my-5">
                @foreach ($module as $item)
                <div class="col-lg-3 d-flex justify-content-center">
                    <button class="myBtn-white fw-bold w-100">{{$item ->module}}</button>
                </div>
                @endforeach
               
            </div>
        </div>
    </section>
@endsection
