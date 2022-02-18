@extends('_layout._base')

@section('ekskul')
<div class="container-md">
  <h1>Ekstrakurikuler</h1>
  <div class="row text-center">
  @foreach ($items as $item)
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <img src="{{ ('assets/img/'.$item->image) }}" class="card-img-top" alt="">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col">
                        <div class="text-xs font-weight-bold text-primary text-uppercase">
                            {{ $item->nama }}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $item->desc }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
