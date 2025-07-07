@extends('admin.app')

@section('title', 'Create Product')

@section('contents')
    <h1 class="mb-4">Add Modules</h1>
    <hr />
    <form action="{{ route('materials.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Module</label>
            <select class="form-control" name="module_id" required>
                @foreach ($modules as $module)
                    <option value="{{ $module->id }}">{{ $module->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Title</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="mb-3">
            <label>Content</label>
            <textarea name="content" class="form-control" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label>Video URL (optional)</label>
            <input type="text" name="video_url" class="form-control">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
    
@endsection
