@extends('admin.app')

@section('title', 'Show Module')

@section('contents')
    <h1 class="mb-0">Detail Module</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Category</label>
            <input type="text" name="category" class="form-control" placeholder="Category" value="{{ $module->category->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Module Title</label>
            <input type="text" name="module" class="form-control" placeholder="Module" value="{{ $module->title }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $module->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $module->updated_at }}" readonly>
        </div>
    </div>
@endsection



