@extends('layouts.public-')

@section('title', 'Home')
@section('content')
<header style="background-image: url('image/bg1.jpg')" class="py-5">
  
      <div class="container px-2 px-lg-2 my-5">
        <div class="text-center text-white">
          <h1 class="display-4 fw-bolder">EDELWEISS OUTDOOR</h1>
          <p class="lead fw-normal text-white-80 mb-0">
            Penyewaan outdoor
          </p>
        </div>
      </div>
    </header>

<br>

    <form action="" method="get">
      <div class="row">
        <div class="col-12 col-sm-6 ">
          <select name="kategori" id="kategori" class="form-control">
            <option value="">Pilih Kategori</option>
            @foreach ($kategori as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
          </select>
        </div>

        <div class="col-12 col-sm-6">
        <div class="input-group mb-3">
      <input type="text" name="nama_barang" class="form-control" placeholder="cari produk" >
      <button class="btn btn-primary" type="submit"> Search </button>
      </div>
    </div>
      </div>

    </form>
    <!-- Section-->
    <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
        <h3 class="text-center mb-5">Daftar Barang</h3>
        <div
          class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
        >
        @foreach ($barang as $item)
          <div class="col mb-5 bg-transparent">
            <div class="card h-100">
              <!-- Sale badge-->
              <div
                class="badge badge-custom text-white position-absolute {{$item->status == 'tersedia' ? 'bg-success' : 'bg-danger'}}"
                style="top: 0; right: 0"
              >
              {{$item->status}}
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="{{ $item->gambar != null ? asset('storage/gambar/'.$item->gambar) : asset('image/No-image-found.jpg') }}"
                alt="..." draggable='false'
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">{{ $item->nama_barang}}</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.{{$item->harga_sewa}}/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Brand</span>
                      <span style="font-weight: 600">{{$item->brand}}</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Stok tersedia</span>
                      <span style="font-weight: 600">{{$item->stok}}</span>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- Product actions-->
              <div class="card-footer border-top-0 bg-transparent">
                <div class="text-center">
                  <a class="btn btn-primary mt-auto" href="#">Sewa</a>
                  <a
                    class="btn btn-info mt-auto text-white"
                    href="/detail"
                    >Detail</a
                  >
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
@endsection