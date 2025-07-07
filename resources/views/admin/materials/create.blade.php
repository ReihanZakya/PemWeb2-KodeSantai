@extends('admin.app')

@section('title', 'Create Product')

@section('contents')
    <h1 class="mb-4">Add Modules</h1>
    <hr />
    <form action="{{ route('modules.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6 mb-2 mb-md-0">
                <select class="form-control" name="category" id="category">
                    <option value="Frontend">Frontend</option>
                    <option value="Backend">Backend</option>
                    <option value="Fullstack">Fullstack</option>
                </select>
                {{-- <input type="text" name="category" class="form-control" placeholder="Category"> --}}
            </div>
            <div class="col-md-6">
                <input type="text" name="module" class="form-control" placeholder="Module">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
