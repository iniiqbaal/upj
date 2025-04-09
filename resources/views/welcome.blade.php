@extends('layouts.home')

@section('content')
    
<main class="main">
<!-- Hero Section -->
<section id="hero" class="carousel slide hero" data-bs-ride="carousel" data-bs-interval="1000" data-bs-pause="hover">

    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img src="{{ asset('assets/Dewi-1.0.0/assets/img/Banner dan logo/SMKN 2 BANGKALAN.jpg') }}" class="d-block w-100 hero-img" alt="Gedung SMKN 2 Bangkalan">
            <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-25 p-4 rounded">
                <h2 class="fs-1 fw-bold text-center">UPJ SMK NEGERI 2 BANGKALAN</h2>
                <p class="text-light fs-5 text-center">Unit Produksi & Jasa</p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="{{ asset('assets/Dewi-1.0.0/assets/img/Banner dan logo/pamflet2fix.jpg') }}" class="d-block w-100 hero-img" alt="Pamflet UPJ SMKN 2 Bangkalan">
        </div>
    </div>

    <!-- Tombol Navigasi -->
    <button class="carousel-control-prev" type="button" data-bs-target="#hero" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

    <!-- Indikator Slide -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>

</section>

<!-- JavaScript untuk Swipe Support -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let heroCarousel = document.querySelector("#hero");
        let carousel = new bootstrap.Carousel(heroCarousel, {
            interval: 10000, // 10 detik
            ride: "carousel"
        });

        // Restart autoplay setelah interaksi manual
        heroCarousel.addEventListener("slid.bs.carousel", function () {
            carousel.cycle();
        });

        // Tambahkan fitur swipe untuk mobile
        let startX = 0;
        let endX = 0;

        heroCarousel.addEventListener("touchstart", function (event) {
            startX = event.touches[0].clientX;
        });

        heroCarousel.addEventListener("touchmove", function (event) {
            endX = event.touches[0].clientX;
        });

        heroCarousel.addEventListener("touchend", function () {
            let diffX = startX - endX;
            if (Math.abs(diffX) > 50) { // Jika geseran cukup jauh
                if (diffX > 0) {
                    // Geser ke kanan (next)
                    bootstrap.Carousel.getInstance(heroCarousel).next();
                } else {
                    // Geser ke kiri (prev)
                    bootstrap.Carousel.getInstance(heroCarousel).prev();
                }
            }
        });
    });
</script>

  <!-- Stats Section -->

      <!-- About Section -->
      <section id="about" class="about section">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <h3>
                UPJ SMK Negeri 2 Bangkalan
              </h3>
              <img
                src="{{ asset('assets/Dewi-1.0.0/assets/img/Banner dan logo/UPJ-KI.jpg') }}"
                class="img-fluid rounded-4 mb-4"
                alt=""
              />
              <p>
                Unit Produksi dan Jasa (UPJ) di SMK Negeri 2 Bangkalan adalah unit yang berfungsi sebagai wadah bagi siswa untuk menerapkan keterampilan yang mereka pelajari dalam lingkungan nyata. UPJ ini memungkinkan siswa untuk mengembangkan kompetensi mereka melalui proyek-proyek nyata, memberikan layanan kepada masyarakat, dan memproduksi barang atau jasa yang relevan dengan bidang keahlian mereka. 
              </p>
              <p>
                Melalui UPJ, siswa dapat mengasah keterampilan praktis, memahami dinamika dunia kerja, dan mempersiapkan diri untuk tantangan profesional di masa depan.
              </p>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
              <div class="content ps-0 ps-lg-5">
                <p class="fw-bold">
                  Tujuan dari Unit Produksi dan Jasa (UPJ) di SMK Negeri 2 Bangkalan adalah:
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    <span
                      >Meningkatkan Keterampilan Siswa Memberikan pengalaman kerja nyata agar siswa lebih siap menghadapi dunia industri.</span
                    >
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    <span
                      >Menerapkan Kompetensi Keahlian Mengaplikasikan ilmu yang dipelajari di sekolah ke dalam proyek atau layanan nyata.</span
                    >
                  </li>
                  <li>
                    <i class="bi bi-check-circle-fill"></i>
                    <span
                      >Menghasilkan Produk dan Jasa Berkualitas Mengembangkan produk atau layanan yang bisa digunakan oleh masyarakat.</span
                    >
                  </li>
                </ul>
                <!-- <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                  aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint
                  occaecat cupidatat non proident
                </p> -->

                <div class="position-relative mt-4">
                  <img
                    src="{{ asset('assets/Dewi-1.0.0/assets/img/Banner dan logo/tamnelvid.png') }}"
                    class="img-fluid rounded-4"
                    alt=""
                  />
                  <a
                    href="https://youtu.be/m7236NHZ5tQ?si=igoCSbJnmVXmtg-T"
                    class="glightbox pulsating-play-btn"
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /About Section -->

    <!-- Logo mitra Section -->


    <section id="clients" class="clients section light-background">
      <div class="clients" data-aos="fade-up">
        <h3>Mitra SMK Negeri 2 Bangkalan</h3>
      </div>
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/Dewi-1.0.0/assets/img/Logo Mitra SMK/logo MPM.jpg" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/Dewi-1.0.0/assets/img/Logo Mitra SMK/logo ASSI.jpg" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/Dewi-1.0.0/assets/img/Logo Mitra SMK/logo PELINDO.jpg" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/Dewi-1.0.0/assets/img/Logo Mitra SMK/logo DUMAS.jpg" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/Dewi-1.0.0/assets/img/Logo Mitra SMK/logo PLN.jpg" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/Dewi-1.0.0/assets/img/Logo Mitra SMK/logo MITSUBISHI.jpg" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- /Logo mitra Section -->




 <!-- Services Section -->
<section id="services" class="services section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Produk</h2>
        <p>Produk Kami<br /></p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        @php
            // Ambil daftar jurusan unik dari produk yang ada
            $departments = $products->groupBy('department');
        @endphp

        @foreach($departments as $department => $departmentProducts)
            <div class="department-section">
                <h3 class="text-center mt-4">{{ $department }}</h3>
                <div class="row gy-5">
                    @foreach($departmentProducts as $item)
                        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="service-item">
                                <div class="img">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="{{ $item->name }}" />
                                </div>
                                <div class="details position-relative">
                                <div class="icon">
    <a href="https://wa.me/{{ $item->whatsapp_number }}?text={{ urlencode('Halo, saya tertarik dengan ' . $item->name . '. Apakah masih tersedia?') }}" 
       target="_blank">
        <i class="bi bi-whatsapp"></i> 
    </a>
</div>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#productModal{{ $item->id }}">
                                        <h3>{{ $item->name }}</h3>
                                    </a>
                                    <p>{{ $item->description }}</p>
                                    <p>Rp.{{ number_format($item->price, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="productModal{{ $item->id }}" tabindex="-1" aria-labelledby="productModalLabel{{ $item->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="productModalLabel{{ $item->id }}">{{ $item->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid rounded" alt="{{ $item->name }}" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</section>
<!-- /Services Section -->


  <!-- Clients Section -->
  {{-- <section id="clients" class="clients section light-background">
    <div class="container" data-aos="fade-up">
      <div class="row gy-4">
        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img
            src="{{ asset('assets/Dewi-1.0.0/assets/img/clients/client-1.png') }}"
            class="img-fluid"
            alt=""
          />
        </div>
        <!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img
            src="{{ asset('assets/Dewi-1.0.0/assets/img/clients/client-2.png') }}"
            class="img-fluid"
            alt=""
          />
        </div>
        <!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img
            src="{{ asset('assets/Dewi-1.0.0/assets/img/clients/client-3.png') }}"
            class="img-fluid"
            alt=""
          />
        </div>
        <!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img
            src="{{ asset('assets/Dewi-1.0.0/assets/img/clients/client-4.png') }}"
            class="img-fluid"
            alt=""
          />
        </div>
        <!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img
            src="{{ asset('assets/Dewi-1.0.0/assets/img/clients/client-5.png') }}"
            class="img-fluid"
            alt=""
          />
        </div>
        <!-- End Client Item -->

        <div class="col-xl-2 col-md-3 col-6 client-logo">
          <img
            src="{{ asset('assets/Dewi-1.0.0/assets/img/clients/client-6.png') }}"
            class="img-fluid"
            alt=""
          />
        </div>
        <!-- End Client Item -->
      </div>
    </div>
  </section> --}}
  <!-- /Clients Section -->

  <!-- Portfolio Section -->
 <section id="portfolio" class="portfolio section">
<div class="container section-title" data-aos="fade-up">
    <h2>Kami juga menyediakan</h2>
    <p>Jasa</p>
</div>

<div class="container">
    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
        @foreach($jasa as $service)
        <div class="col-lg-4 col-md-6 portfolio-item isotope-item">
            <div class="portfolio-content h-100">
                @if($service->img_jasa)
                    <img src="{{ asset('storage/' . $service->img_jasa) }}" 
                         class="img-fluid" 
                         alt="{{ $service->nama_jasa }}"
                         style="width: 100%; height: 300px; object-fit: cover;" />
                @else
                    <img src="{{ asset('dewi-1.0.0/assets/img/portfolio/default.jpg') }}" 
                         class="img-fluid" 
                         alt="Default Image"
                         style="width: 100%; height: 300px; object-fit: cover;" />
                @endif
                <div class="portfolio-info text-center" >
                    <h4>{{ $service->nama_jasa }}</h4>
                    <a  href="https://wa.me/{{ $service->no_whatsapp }}?text={{ urlencode('Halo, saya tertarik dengan ' . $service->nama_jasa )}}" 
                        target="_blank" 
                        class="details-link">
                        <i class="bi bi-whatsapp"></i> <span class="">Hubungi</span>
                        </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</section>
  <!-- /Portfolio Section -->

@endsection

