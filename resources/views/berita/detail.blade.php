@extends('_layout.with-sidebar')

@section('content')
  <div class="card">
    <div class="card-body">
      <h1>{{ $item->judul }}</h1>
      <img src="{{ asset($item->foto) }}" class="img-fluid rounded" alt="...">
      <div>{!! $item->isi !!}</div>
    </div>
  </div>
    {{-- komentar --}}
  <div class="card mt-5 mb-5">
    <div class="card-body">
      <div class="card-title">
        <h1>Komentar</h1>
      </div>
      
      @foreach($komen as $komentar)

      <div class="card mb-3" style="max-width: 800px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('sample-image/user.png') }}" class="img-fluid rounded-circle" alt="..." >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><span class="badge bg-primary">{{ $komentar->name }}</span></h5>
              <small class="text-muted">{{ $komentar->email }}</small>
              <hr>
              <p class="card-text">{{ $komentar->komentar }}</p>
              <p class="card-text"><small class="text-muted">at {{ $komentar->created_at}}</small></p>
            </div>
          </div>
        </div>
      </div>
     
      

      @endforeach
    </div>
  </div>


  {{-- tambah  komentar --}}
  <div class="card mt-5">
    <div class="card-body">
    <div class="card-title">
      <h1>Kolom Komentar</h1>
    </div>
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label hidden  for="exampleFormControlInput1" class="form-label">ID berita</label>
        <input hidden type="text" name="berita_id" value="{{ $item->id }}" class="form-control" id="exampleFormControlInput1" placeholder="idberita">
      </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama lengkap </label>
          <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="nama">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email </label>
          <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
          <textarea class="form-control" name="komentar" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">kirim</button>
    </form>
    </div>
  </div>
 
@endsection

@push('sidebar')
<div class="alert alert-primary">Berita Lainnya</div>
<ol class="list-group list-group-numbered">
  @foreach ($beritas->skip(15) as $item)
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
