@extends('_layout.with-sidebar')

@section('content')
  <h1>Berita</h1>

  @foreach ($items as $item)
    <div class="card mb-3">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="{{ asset($item->foto) }}" class="img-fluid rounded-start" alt="{{ $item->judul }}">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{ $item->judul }}</h5>
            <p class="card-text">{{ $item->slug }}</p>
            <p class="card-text"><small class="text-muted">{{ $item->created_at->diffForHumans()  }}</small></p>

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
<div class="alert alert-primary mt-2 ml-2">News</div>
@if ($News->count())
<div class="list-group">
  <a href="{{ route('berita.show', [
    'beritum' => $News[0]->id,
      ]) }}" class="list-group-item list-group-item-action" aria-current="true">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{ $News[0]->judul }}</h5>
      <small><span class="badge bg-primary rounded-pill">{{ $News[0]->created_at->diffForHumans()}}</span></small>
    </div>
    <img src="{{ asset($News[0]->foto) }}" class="img-fluid rounded" alt="...">
    <p class="mb-1">{{ $News[0]->slug }}</p>
  </a>
  <a href="{{ route('berita.show', [
    'beritum' => $News[1]->id,
      ]) }}" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{ $News[1]->judul }}</h5>
      <small><span class="badge bg-primary rounded-pill">{{ $News[1]->created_at->diffForHumans()}}</span></small>
    </div>
    <img src="{{ asset($News[1]->foto) }}" class="img-fluid rounded" alt="...">
    <p class="mb-1">{{ $News[1]->slug }}</p>
  </a>
  <a href="{{ route('berita.show', [
    'beritum' => $News[2]->id,
      ]) }}" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{ $News[2]->judul }}</h5>
      <small><span class="badge bg-primary rounded-pill">{{ $News[2]->created_at->diffForHumans()}}</span></small>
    </div>
    <img src="{{ asset($News[2]->foto) }}" class="img-fluid rounded" alt="...">
    <p class="mb-1">{{ $News[2]->slug }}</p>
  </a>
  <a href="{{ route('berita.show', [
    'beritum' => $News[3]->id,
      ]) }}" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{ $News[3]->judul }}</h5>
      <small><span class="badge bg-primary rounded-pill">{{ $News[3]->created_at->diffForHumans()}}</span></small>
    </div>
    <img src="{{ asset($News[3]->foto) }}" class="img-fluid rounded" alt="...">
    <p class="mb-1">{{ $News[3]->slug }}</p>
  </a>
  
</div>
@endif
@endpush

