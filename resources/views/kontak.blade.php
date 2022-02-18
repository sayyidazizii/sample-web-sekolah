@extends('_layout.default')

@section('content')
  <div class="container">
    <div class="text-center mb-3">
      <h1>Kontak Kami</h1>
    </div>

    <div class="row">
      <div class="col-sm-4">
        @foreach($items as $item)
        <div class="item-text">
          <div class="item-text__title">Alamat</div>
          <div class="item-text__main">
            <p>{{ $item->alamat }}</p>
          </div>
        </div>
        <div class="item-text">
          <div class="item-text__title">Email</div>
          <div class="item-text__main">
            <p>{{ $item->email }}</p>
          </div>
        </div>
        <div class="item-text">
          <div class="item-text__title">Whatsapp</div>
          <div class="item-text__main">
            <p>{{ $item->whatsapp }}
          </div>
        </div>
      </div>
      <div class="col-sm-8">

        <h5>Kirim pesan</h5>

        <div class="mb-3">Halo silahkan jika ada yang ditanyakan atau untuk mengirim kritik dan saran</div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="name" name="name" placeholder="">
          <label for="name">Nama Lengkap</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="phone" name="phone" inputmode="tel"
            placeholder="">
          <label for="phone">Nomor Telp/ WhatsApp</label>
        </div>
        <div class="form-floating mb-3">
          <textarea class="form-control" placeholder="" id="isi-pesan" style="height: 200px"></textarea>
          <label for="isi-pesan">Isi Pesan</label>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </div>

      </div>

    </div>
  </div>

  <div class="ratio ratio-16x9 mt-4" style="--bs-aspect-ratio: 300px;">
    <iframe
      src="{{ $item->maps }}"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  @endforeach
@endsection
