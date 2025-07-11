@extends('layouts.main')

@section('category')
    <section>
        <div class="mybg-blue d-flex justify-content-center">
            <div class="p-5 my-5">
                <h2>Pilih Kategori Yang Ingin Kamu Pelajari</h2>
            </div>
        </div>
        <div class="container">
            <div class="d-flex row justify-content-center gap-5 my-5">
                <div class="card mx-3 my-lg-5 shadow" style="width: 18rem;">
                    <img src={{ 'images/ui-ux.png' }} class=" mx-auto m-3" alt="..." width="50%">
                    <div class="card-body f-lightblue">
                        <h5 class="card-title">Frontend Developer</h5>
                        <p class="card-text">Mengembangkan bagian aplikasi web yang berinteraksi dengan pengguna, yaitu
                            hal-hal yang dirender di browser.</p>
                            <a href="{{ route('modules.byCategory', 1) }}" class="btn myBtn-blue fw-bold">Mulai</a>
                    </div>
                </div>
                <div class="card mx-3 my-lg-5 shadow" style="width: 18rem;">
                    <img src={{ 'images/website.png' }} class=" mx-auto m-3" alt="..." width="50%">
                    <div class="card-body f-lightblue">
                        <h5 class="card-title">Backend Developer</h5>
                        <p class="card-text">Kembangkan bagian yang disembunyikan dari pengguna, mis. hal-hal seperti API.
                            database, mesin pencari, dll.</p>
                            <a href="{{ route('modules.byCategory', 2) }}" class="btn myBtn-blue fw-bold">Mulai</a>
                    </div>
                </div>
                <div class="card mx-3 my-lg-5 shadow" style="width: 18rem;">
                    <div class="d-flex my-4">
                        <img src={{ 'images/ui-ux.png' }} class=" mx-auto m-3" alt="..." width="30%">
                        <div class="align-items-center my-auto">
                            <h2>+</h2>
                        </div>
                        <img src={{ 'images/website.png' }} class=" mx-auto m-3" alt="..." width="30%">
                    </div>

                    <div class="card-body f-lightblue">
                        <h5 class="card-title">Fullstack Developer</h5>
                        <p class="card-text">Kembangkan sisi frontend dan backend aplikasi web, yaitu seluruh tumpukan
                            pengembangan.</p>
                            <a href="{{ route('modules.byCategory', 3) }}" class="btn myBtn-blue fw-bold">Mulai</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
