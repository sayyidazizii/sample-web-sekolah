@extends('_layout.with-sidebar')

@section('content')
  <div class="card">
    <div class="card-body">
      <h1>{{ $item->judul }}</h1>

      <div>{!! $item->isi !!}</div>
    </div>
  </div>
@endsection

@push('sidebar')
  ini sidebar, bisa ditambahkan artikel terbaru, galeri
@endpush
