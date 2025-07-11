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
                <select name="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $module->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col mb-3">
                <label class="form-label">Module Title</label>
                <input type="text" name="title" class="form-control" placeholder="Module Title" value="{{ $module->title }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
    
@endsection
