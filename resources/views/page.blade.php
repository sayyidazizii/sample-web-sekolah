@extends('_layout.with-sidebar')

@section('content')
  <div class="container">
    <h1>{{ $item->judul }}</h1>
  <div class="card">
    <div class="card-body">
      <div>{!! $item->isi !!}</div>
    </div>
  </div>
  </div>
@endsection

@push('sidebar')
<div class="alert alert-primary">News Berita</div>
<ol class="list-group list-group-numbered">
  @foreach ($beritas->skip(20) as $item)
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <a href="{{ route('berita.show', [
      'beritum' => $item->id,
        ]) }}">
    <div class="ms-2 me-auto">
      <div class="fw-bold">{{ $item->judul }}</div>
    </a>
      {{ $item->slug }}
    </div>
    <span class="badge bg-primary rounded-pill">{{ $item->created_at->diffForHumans() }}</span>
  </li>
  @endforeach
</ol>
@endpush
