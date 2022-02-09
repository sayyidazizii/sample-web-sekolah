@extends('_layout.with-sidebar')

@section('content')
  <h1>Berita Terbaru</h1>

  @foreach ($items as $item)
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{ asset($item->foto) }}" class="img-fluid rounded-start" alt="{{ $item->judul }}">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{ $item->judul }}</h5>
            <p class="card-text">{{ $item->sinopsis }}</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

            <a href="{{ route('berita.show', [
                'beritum' => $item->id,
            ]) }}"
              class="stretched-link"></a>
          </div>
        </div>
      </div>
    </div>
  @endforeach

  {{-- PAGINATION --}}
  @if ($items->lastPage() > 1)
    {{ $items->links() }}
  @endif
@endsection

@push('sidebar')
  ini sidebar, bisa ditambahkan artikel terbaru, galeri
@endpush
