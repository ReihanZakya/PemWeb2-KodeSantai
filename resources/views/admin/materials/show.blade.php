@extends('admin.app')

@section('title', 'Show Material')

@section('contents')
    <h1 class="mb-0">Detail Material</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Module Title</label>
            <input type="text" name="category" class="form-control" placeholder="Category" value="{{ $material->module->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Material Title</label>
            <input type="text" name="module" class="form-control" placeholder="Module" value="{{ $material->title }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Material Content</label>
            <textarea name="" id="" cols="30" rows="10" class="form-control" readonly>{{ $material->content }}</textarea>
        </div>
        <div class="col mb-3">
            <label class="form-label">Material Link</label>
            <input type="text" name="module" class="form-control" placeholder="Module" value="{{ $material->video_url }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $material->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $material->updated_at }}" readonly>
        </div>
    </div>
@endsection



