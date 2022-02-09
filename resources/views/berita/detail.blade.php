@extends('_layout.with-sidebar')

@section('content')
  <div class="card">
    <div class="card-body">
      <h1>{{ $item->judul }}</h1>

      <div>{!! $item->isi !!}</div>
    </div>
  </div>

  <div class="alert alert-info">ditambah banyak hal seperti komentar, berita terkait, ... juga boleh</div>
@endsection

@push('sidebar')
  ini sidebar, bisa ditambahkan artikel terbaru, galeri
@endpush
