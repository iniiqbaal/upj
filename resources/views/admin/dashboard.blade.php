@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row justify-content-center">
                <div class="col-lg-8 mb-4">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-8">
                        <div class="card-body">
                          <h5 class="card-title text-primary ">Selamat Datang ! 🎉</h5>
                          <p class="mb-4">
                            Anda Berada di Dashboard UPJ <span class="fw-bold">SMKN 2 BANGKALAN</span> 
                          </p>

                          <a href="https://smkn2-bangkalan.sch.id/" class="btn btn-sm btn-outline-primary"  target="_blank">SMKN 2 BANGKALAN</a>
                        </div>
                      </div>
                      <div class="col-sm-4 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="{{ asset('assets/sneat/assets/img/illustrations/man-with-laptop-light.png') }}"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Tambahkan div kosong dengan margin bottom yang besar -->
              <div style="margin-bottom: 300px;"></div>
              
            </div>
@endsection
