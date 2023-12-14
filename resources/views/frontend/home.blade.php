@extends('layouts.frontend')

@section('title', 'Home')
@section('content')
<header class="bg-dark py-5">
      <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
          <h1 class="display-4 fw-bolder">EDELWEISS OUTDOOR</h1>
          <p class="lead fw-normal text-white-50 mb-0">
            Penyewaan outdoor
          </p>
        </div>
      </div>
    </header>
    <!-- Section-->
    <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
        <h3 class="text-center mb-5">Daftar Barang</h3>
        <div
          class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
        >
          <div class="col mb-5">
            <div class="card h-90">
              <!-- Sale badge-->
              <div
                class="badge badge-custom bg-warning text-white position-absolute"
                style="top: 0; right: 0"
              >
                Tidak Tersedia
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Tenda</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.20.000/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Brand</span>
                      <span style="font-weight: 600">Eiger</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Stok tersedia</span>
                      <span style="font-weight: 600">50</span>
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
          <div class="col mb-5">
            <div class="card h-90">
              <!-- Sale badge-->
              <div
                class="badge badge-custom bg-success text-white position-absolute"
                style="top: 0; right: 0"
              >
                Tersedia
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Sleeping Bag</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.25.000/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Brand</span>
                      <span style="font-weight: 600">Arai</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Stok tersedia</span>
                      <span style="font-weight: 600">15</span>
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
          <div class="col mb-5">
            <div class="card h-90">
              <!-- Sale badge-->
              <div
                class="badge badge-custom bg-success text-white position-absolute"
                style="top: 0; right: 0"
              >
                Tersedia
              </div>
              <!-- Product image-->
              <img
                class="card-img-top"
                src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"
                alt="..."
              />
              <!-- Product details-->
              <div class="card-body card-body-custom pt-4">
                <div class="text-center">
                  <!-- Product name-->
                  <h5 class="fw-bolder">Carrier</h5>
                  <!-- Product price-->
                  <div class="rent-price mb-3">
                    <span class="text-primary">Rp.28.000/</span>day
                  </div>
                  <ul class="list-unstyled list-style-group">
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Brand</span>
                      <span style="font-weight: 600">Consina</span>
                    </li>
                    <li
                      class="border-bottom p-2 d-flex justify-content-between"
                    >
                      <span>Stok tersedia</span>
                      <span style="font-weight: 600">20</span>
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
        </div>
      </div>
    </section>
@endsection