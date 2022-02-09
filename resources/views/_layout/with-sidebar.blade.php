@extends('_layout._base')

@section('main-content')
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        @yield('content')
      </div>
      <div class="col-md-4">
        @stack('sidebar')
      </div>
    </div>
  </div>
@endsection
