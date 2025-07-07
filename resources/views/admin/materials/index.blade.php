@extends('admin.app')

@section('title', 'Home Materials')

@section('contents')

<div class="card shadow mb-4">
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="mt-3 font-weight-bold text-primary">Data Tema</h6>
        <a href="{{ route('modules.create') }}" class="btn btn-primary">Add Module</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Module</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Video</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Module</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Video</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($material as $item )
                    {{-- {{ ($item->category->name) }} --}}
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->module->title }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->content }}</td>
                        <td>{{ $item->video_url }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td class="d-flex">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('modules.show', $item->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('modules.edit', $item->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('modules.destroy', $item->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection




