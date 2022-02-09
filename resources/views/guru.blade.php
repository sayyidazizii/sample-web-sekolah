@extends('_layout.with-sidebar')

@section('content')
  <h1>Daftar Guru</h1>
  <div class="row g-3">
    @foreach ($items as $item)
      <div class="col-sm-3">
        <div class="border-bottom">
          <div style="width: 100px; height: 100px;" class="mx-auto rounded-circle overflow-hidden mb-1">
            <img src="{{ asset($item->foto) }}" alt="{{ $item->nama }}" class="img-fluid">
          </div>
          <div class="text-center">{{ $item->nama }}</div>
          <div class="text-muted small text-center">{{ $item->jabatan }}</div>
        </div>
      </div>
    @endforeach

  </div>
@endsection

@push('sidebar')
  ini sidebar, bisa ditambahkan artikel terbaru, galeri
@endpush
