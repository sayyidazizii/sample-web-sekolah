@extends('_layout.default')

@section('content')
  <div class="container">
    <h1>Galeri</h1>
    <div class="alert alert-info">lebih bagus lagi kalau ada fitur zoom/ fullscreen saat foto diklik</div>
    <div class="row g-3 mb-3">
      @foreach ($items as $item)
        <div class="col-sm-4 col-md-3">
          <div class="card">
            <div class="ratio ratio-16x9">
              <div class="overflow-hidden">
                <img src="{{ asset($item->foto) }}" alt="{{ $item->nama }}" class="img-fluid">
              </div>
            </div>
            <div class="card-body">
              <div class="small text-muted">{{ $item->nama }}</div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    {{-- PAGINATION --}}
    @if ($items->lastPage() > 1)
      {{ $items->links() }}
    @endif
  </div>
@endsection
