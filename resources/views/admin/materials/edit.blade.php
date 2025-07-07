@extends('admin.app')
  
@section('title', 'Edit module')
  
@section('contents')
    <h1 class="mb-0">Edit Module</h1>
    <hr />
    <form action="{{ route('modules.update', $module->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Category</label>
                <input type="text" name="category" class="form-control" placeholder="Category" value="{{ $module->category }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Module</label>
                <input type="text" name="module" class="form-control" placeholder="Module" value="{{ $module->module }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
