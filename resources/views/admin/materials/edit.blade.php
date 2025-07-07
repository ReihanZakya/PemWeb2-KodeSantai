@extends('admin.app')
  
@section('title', 'Edit module')
  
@section('contents')
    <h1 class="mb-0">Edit Module</h1>
    <hr />
    <form action="{{ route('materials.update', $material->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="">
            <div class="col mb-3">
                <label class="form-label">Material Title</label>
                <select class="form-control" name="module_id" required>
                    @foreach ($modules as $module)
                        <option value="{{ $module->id }}" {{ $material->module_id == $module->id ? 'selected' : '' }}>
                            {{ $module->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col mb-3">
                <label class="form-label">Material Title</label>
                <input type="text" name="title" class="form-control" value="{{ $material->title }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Material Content</label>
                <textarea name="content" class="form-control">{{ $material->content }}</textarea>
            </div>
            <div class="col mb-3">
                <label class="form-label">Link</label>
                <input type="text" name="video_url" class="form-control" value="{{ $material->video_url }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
