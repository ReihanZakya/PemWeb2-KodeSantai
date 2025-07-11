@extends('layouts.main')

@section('material')
<section class=" mybg-white" style="height: 100vh">
    <div class="container my-5">
        <h2 class="mb-4">Materi dari Modul: {{ $module->title }}</h2>
    
        @auth
            @php
                $bookmarked = \App\Models\Bookmark::where('user_id', auth()->id())
                                ->where('module_id', $module->id)
                                ->exists();
            @endphp

            @if (!$bookmarked)
                <form action="{{ route('bookmark.add', $module->id) }}" method="POST" class="mb-3">
                    @csrf
                    <button type="submit" class="btn myBtn-blue">+ Tambah ke Bookmark</button>
                </form>
            @else
                <form action="{{ route('bookmark.remove', $module->bookmarks->where('user_id', auth()->id())->first()->id) }}" method="POST" class="mb-3">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn myBtn-red">Hapus Bookmark</button>
                </form>
            @endif
        @endauth


        @if($materials->isEmpty())
            <p>Belum ada materi untuk modul ini.</p>
        @else
            <ul class="list-group">
                @foreach ($materials as $material)
                    <li class="list-group-item">
                        <h5>{{ $material->title }}</h5>
                        <p>{{ Str::limit($material->content, 100) }}</p>
                        @if($material->video_url)
                            <a href="{{ $material->video_url }}" target="_blank">Lihat Video</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

</section>
@endsection
