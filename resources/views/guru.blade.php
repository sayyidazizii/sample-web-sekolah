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
 <div class="alert alert-primary mt-2 ml-2">News From Galeri</div>
 {{-- galeri --}}
  <div class="col">
   @if ($galeris->count())
   <div class="card h-100">
     <div class="position-absolute bg-dark px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.7)"><a href="{{ route('galeri.index') }}" class="text-white text-decoration-none">{{ $galeris[0]->created_at->diffForHumans()  }}</a></div>
     <img src="{{ asset($galeris[0]->foto) }}" class="card-img-top" alt="...">
     <div class="card-footer">
       <small class="text-center">{{ $galeris[0]->nama }}</small>
     </div>
   </div>
   @endif
 </div> 
 <div class="col">
  @if ($galeris->count())
  <div class="card h-100">
    <div class="position-absolute bg-dark px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.7)"><a href="{{ route('galeri.index') }}" class="text-white text-decoration-none">{{ $galeris[1]->created_at->diffForHumans()  }}</a></div>
    <img src="{{ asset($galeris[1]->foto) }}" class="card-img-top" alt="...">
    <div class="card-footer">
      <small class="text-center">{{ $galeris[1]->nama }}</small>
    </div>
  </div>
  @endif
</div> 
@endpush
