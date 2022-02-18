@extends('_layout.default')

@section('content')
{{-- <style type="text/css">
  .card:hover{
    transform: scale(150%);  
  }
</style> --}}
  <div class="container">
    <h1>Galeri</h1>
    {{-- <div class="alert alert-info">lebih bagus lagi kalau ada fitur zoom/ fullscreen saat foto diklik</div> --}}
    @if ($items->count())
    <div class="row g-3 mb-3">
        <div class="col-sm-4 col-md-3">
          <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
            <img src="{{ asset($items[0]->foto) }}" class="card-img" alt="{{ $items[0]->nama }}" >
            <div class="card-img-overlay">
              <h5 class="card-title text-light">{{ $items[0]->nama }}</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-3">
          <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
            <img src="{{ asset($items[1]->foto) }}" class="card-img" alt="{{ $items[1]->nama }}" >
            <div class="card-img-overlay">
              <h5 class="card-title text-light">{{ $items[1]->nama }}</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-3">
          <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
            <img src="{{ asset($items[2]->foto) }}" class="card-img" alt="{{ $items[2]->nama }}" >
            <div class="card-img-overlay">
              <h5 class="card-title text-light">{{ $items[2]->nama }}</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-3">
          <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
            <img src="{{ asset($items[3]->foto) }}" class="card-img" alt="{{ $items[3]->nama }}" >
            <div class="card-img-overlay">
              <h5 class="card-title text-light">{{ $items[3]->nama }}</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-3">
          <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
            <img src="{{ asset($items[4]->foto) }}" class="card-img" alt="{{ $items[4]->nama }}" >
            <div class="card-img-overlay">
              <h5 class="card-title text-light">{{ $items[4]->nama }}</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-3">
          <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
            <img src="{{ asset($items[5]->foto) }}" class="card-img" alt="{{ $items[5]->nama }}" >
            <div class="card-img-overlay">
              <h5 class="card-title text-light">{{ $items[5]->nama }}</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-3">
          <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
            <img src="{{ asset($items[6]->foto) }}" class="card-img" alt="{{ $items[6]->nama }}" >
            <div class="card-img-overlay">
              <h5 class="card-title text-light">{{ $items[6]->nama }}</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-md-3">
          <div class="card bg-dark text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop8">
            <img src="{{ asset($items[7]->foto) }}" class="card-img" alt="{{ $items[7]->nama }}" >
            <div class="card-img-overlay">
              <h5 class="card-title text-light">{{ $items[7]->nama }}</h5>
            </div>
          </div>
        </div>
      @endif
    </div>
  </div>

@endsection


@if ($items->count())
<!-- Modal1 -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{ $items[0]->nama }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset($items[0]->foto) }}" class="card-img" alt="{{ $items[0]->nama }}" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal2 -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{ $items[1]->nama }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset($items[1]->foto) }}" class="card-img" alt="{{ $items[1]->nama }}" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal 3-->
<div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{ $items[2]->nama }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset($items[2]->foto) }}" class="card-img" alt="{{ $items[2]->nama }}" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal 4-->
<div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{ $items[3]->nama }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset($items[3]->foto) }}" class="card-img" alt="{{ $items[3]->nama }}" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal 5-->
<div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{ $items[4]->nama }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset($items[4]->foto) }}" class="card-img" alt="{{ $items[4]->nama }}" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal 6-->
<div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{ $items[5]->nama }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset($items[5]->foto) }}" class="card-img" alt="{{ $items[5]->nama }}" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal 7-->
<div class="modal fade" id="staticBackdrop7" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{ $items[6]->nama }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset($items[6]->foto) }}" class="card-img" alt="{{ $items[6]->nama }}" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal 8-->
<div class="modal fade" id="staticBackdrop8" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{ $items[7]->nama }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset($items[7]->foto) }}" class="card-img" alt="{{ $items[7]->nama }}" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endif
